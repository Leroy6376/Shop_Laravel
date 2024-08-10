<?php

namespace App\Http\Controllers\Admin\Item;

use App\Http\Controllers\Controller;
use App\Http\Requests\Item\UpdateRequest;
use App\Models\Item;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Item $item)
    {
        $data = $request->validated();
        $item->update($data);

        return view('admin.item.show', compact('item'));
    }
}
