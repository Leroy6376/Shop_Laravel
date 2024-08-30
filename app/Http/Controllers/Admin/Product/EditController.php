<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Color;
use App\Models\Product;

class EditController extends Controller
{
    public function __invoke(Product $product)
    {
        $colors = Color::all();
        return view('admin.product.edit', compact('product', 'colors'));
    }
}
