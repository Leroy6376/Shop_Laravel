<?php

namespace App\Http\Controllers\Item;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function __invoke(Item $item)
    {
        $categories = Category::all();
        return view('item.edit', compact('item', 'categories'));
    }
}
