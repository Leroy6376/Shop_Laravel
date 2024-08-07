<?php

namespace App\Http\Controllers\Item;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Item $item)
    {
        return view('item.show', compact('item'));
    }
}
