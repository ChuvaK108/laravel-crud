<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;


class ProductsController extends Controller
{
    public function index(Users $user)
    {
        $products = $user->products;
        return view('products.index', compact('user', 'products'));
    }
}
