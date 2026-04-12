<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Auth::user()->orders()->with('orderItems.product')->get();
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        $products = Product::all();
        return view('orders.create', compact('products'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'items' => 'required|array',
            'items.*.product_id' => 'required|exists:products,id',
            'items.*.quantity' => 'required|integer|min:1',
        ]);

        $total = 0;
        $orderItems = [];

        foreach ($request->items as $item) {
            $product = Product::find($item['product_id']);
            $price = $product->price;
            $total += $price * $item['quantity'];
            $orderItems[] = [
                'product_id' => $item['product_id'],
                'quantity' => $item['quantity'],
                'price' => $price,
            ];
        }

        $order = Order::create([
            'user_id' => Auth::id(),
            'total' => $total,
            'status' => 'pending',
        ]);

        foreach ($orderItems as $item) {
            $item['order_id'] = $order->id;
            OrderItem::create($item);
        }

        return redirect()->route('orders.index')->with('success', 'Pedido creado exitosamente.');
    }

    public function show(Order $order)
    {
        // Ensure user owns the order
        if ($order->user_id !== Auth::id()) {
            abort(403);
        }
        $order->load('orderItems.product');
        return view('orders.show', compact('order'));
    }

    public function edit(Order $order)
    {
        // Maybe not allow editing, or only status
        if ($order->user_id !== Auth::id()) {
            abort(403);
        }
        return view('orders.edit', compact('order'));
    }

    public function update(Request $request, Order $order)
    {
        if ($order->user_id !== Auth::id()) {
            abort(403);
        }
        $request->validate([
            'status' => 'required|in:pending,processing,shipped,delivered,cancelled',
        ]);

        $order->update($request->only('status'));
        return redirect()->route('orders.index')->with('success', 'Pedido actualizado exitosamente.');
    }

    public function destroy(Order $order)
    {
        if ($order->user_id !== Auth::id()) {
            abort(403);
        }
        $order->delete();
        return redirect()->route('orders.index')->with('success', 'Pedido eliminado exitosamente.');
    }
}