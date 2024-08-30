<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Color;
use App\Models\Item;
use App\Models\Product;

class CreateController extends Controller
{
    public function __invoke()
    {
        $items = Item::all();
        $colors = Color::all();
        return view('admin.product.create', compact('items', 'colors'));
    }
}
