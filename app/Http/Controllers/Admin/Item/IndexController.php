<?php

namespace App\Http\Controllers\Admin\Item;

use App\Http\Controllers\Controller;
use App\Models\Item;

class IndexController extends Controller
{
    public function __invoke()
    {
        $items = Item::all();
        return view('admin.item.index', compact('items'));
    }
}
