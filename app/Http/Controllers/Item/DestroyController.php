<?php

namespace App\Http\Controllers\Item;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
    public function __invoke(Item $item)
    {
        $item->delete();
        return redirect()->route('item.index');
    }
}
