<?php

namespace App\Http\Controllers\Admin\Item;

use App\Http\Controllers\Controller;
use App\Models\Item;

class ShowController extends Controller
{
    public function __invoke(Item $item)
    {
        return view('admin.item.show', compact('item'));
    }
}
