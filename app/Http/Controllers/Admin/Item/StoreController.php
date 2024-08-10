<?php

namespace App\Http\Controllers\Admin\Item;

use App\Http\Controllers\Controller;
use App\Http\Requests\Item\StoreRequest;
use App\Models\Item;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Item::firstOrCreate($data);

        return redirect()->route('admin.item.index');
    }
}
