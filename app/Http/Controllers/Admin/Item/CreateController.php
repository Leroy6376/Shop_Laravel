<?php

namespace App\Http\Controllers\Admin\Item;

use App\Http\Controllers\Controller;
use App\Models\Category;

class CreateController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
        return view('admin.item.create', compact('categories'));
    }
}
