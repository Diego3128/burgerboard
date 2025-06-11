<?php

namespace App\Http\Controllers;

use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Throwable;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ProductResource::collection(Product::all());
    }

    //
    public function toggleAvailability(Request $request)
    {
        try {
            $data = $request->validate([
                'product_id' => ['required', 'integer']
            ]);
            $this->authorize('toggleAvailability', Product::class);

            $product = Product::findOrFail($data['product_id']);
            $product->available = !$product->available;
            $product->save();

            return  response()->json(
                [
                    'success' => true,
                    'product_id' => $product->id,
                    'available' => $product->available
                ],
                200
            );
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
                'error' => 'Product with id ' . $data['product_id'] . ' not found'
            ], 404);
        } catch (Throwable $e) {
            return response()->json([
                'success' => false,
                'error' => 'An unexpected error occurred.'
                // 'error' => $e->getMessage()
            ], 500);
        }
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}