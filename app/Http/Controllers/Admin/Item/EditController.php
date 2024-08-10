<?php

namespace App\Http\Controllers\Admin\Item;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Item;

class EditController extends Controller
{
    public function __invoke(Item $item)
    {
        $categories = Category::all();
        return view('admin.item.edit', compact('item', 'categories'));
    }
}
