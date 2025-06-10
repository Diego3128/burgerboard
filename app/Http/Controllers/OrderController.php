<?php

namespace App\Http\Controllers;

use App\Http\Resources\OrderResource;
use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use Carbon\Carbon;
use Error;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\ValidationException;
use Throwable;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): JsonResource
    {
        // todos:
        //create policy to check if the user can see the orders (is admin)

        $orders = Order::with(['products', 'user'])
            ->where('state', false) // or ->where('state', 0)
            ->get();

        return OrderResource::collection($orders);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'products' => ['required', 'array', 'min:1'],
            // 'products.*.id' => ['required', 'exists:products,id'], //optional
            'products.*.quantity' => ['required', 'integer', 'min:1']
        ]);
        DB::beginTransaction();
        try {
            $user = $request->user();
            $order = new Order();
            $order->user_id = $user->id;
            // calc total
            $orderTotal = 0;
            $orderProducts = [];

            foreach ($request->products as $product) {
                $productModel = Product::findOrFail($product['id']);
                //if the product is available added it to the order
                if ($productModel->available) {
                    $lineTotal = $productModel->price * $product['quantity'];
                    $orderTotal += $lineTotal;
                    //new element for order_product table
                    $orderProducts[] = [
                        'product_id' => $productModel->id,
                        'quantity' => $product['quantity'],
                        'created_at' =>  Carbon::now(),
                        'updated_at' => Carbon::now()
                    ];
                }
            }
            // save order
            $order->total = $orderTotal;
            $order->save();
            // add order_id to each order_product array previously created
            foreach ($orderProducts as &$op) {
                $op['order_id'] = $order->id;
            }
            // save order details
            OrderProduct::insert($orderProducts);
            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Order placed successfully',
                'order' => $order,
            ]);
        } catch (Throwable $e) {
            DB::rollBack();

            return response()->json([
                'success' => false,
                'message' => 'Failed to crate the order',
                'error' => $e->getMessage()
            ], 500);
        }
    }

    public function completeOrder(Request $request)
    {
        try {
            $this->authorize('viewAny', Order::class);

            $data = $request->validate([
                'order_id' => ['required', 'integer']
            ]);

            $order = Order::findOrFail($data['order_id']);
            $order->state = true;
            $order->save();

            return response()->json([
                'success' => true,
                'order' => $order
            ], 200);
        } catch (AuthorizationException $e) {
            return response()->json([
                'success' => false,
                'error' => 'You are not authorized to perform this action.'
            ], 403);
        } catch (ValidationException $e) {
            return response()->json([
                'success' => false,
                'errors' => $e->errors() // error array
            ], 422);
        } catch (ModelNotFoundException $e) {
            return response()->json([
                'success' => false,
                'error' => 'Order with id ' . $data['order_id'] . ' not found'
            ], 404);
        } catch (Throwable $e) {
            return response()->json([
                'success' => false,
                'error' => $e->getMessage()
            ], 500);
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}