<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Throwable;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
                //if the product is available
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
            // add order_id to each order_product record previously created
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
