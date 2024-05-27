<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Producto;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    // Agregar un nuevo usuario
    public function addUser(Request $request) {
        $user = User::create($request->all());
        return response()->json($user, 201);
    }

    // Obtener una lista de todos los usuarios
    public function getUsers() {
        $users = User::all();
        return response()->json($users, 200);
    }

    // Agregar un nuevo producto
    public function addProduct(Request $request) {
        $product = Producto::create($request->all());
        return response()->json($product, 201);
    }

    // Obtener una lista de todos los productos
    public function getProducts() {
        $products = Producto::all();
        return response()->json($products, 200);
    }

    // Eliminar un producto
    public function deleteProduct($id) {
        $product = Producto::findOrFail($id);
        $product->delete();
        return response()->json(null, 204);
    }

    // Actualizar los datos de un producto
    public function updateProduct(Request $request, $id) {
        $product = Producto::findOrFail($id);
        $product->update($request->all());
        return response()->json($product, 200);
    }

    // Obtener todos los productos que ha comprado un usuario
    public function getUserProducts($id) {
        $user = User::findOrFail($id);
        $products = $user->products;
        return response()->json($products, 200);
    }

    // Obtener todos los usuarios que han comprado un producto
    public function getProductUsers($id) {
        $product = Producto::findOrFail($id);
        $users = $product->users;
        return response()->json($users, 200);
    }

    // Obtener todos los productos de un pedido
    public function getOrderProducts($id) {
        $order = Order::findOrFail($id);
        $products = $order->products;
        return response()->json($products, 200);
    }
}