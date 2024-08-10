<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreRequest;
use App\Models\Category;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        if ($data['parent_id'] !== null) {
            $data['level'] = Category::find($data['parent_id'])->level + 1;
        }
        Category::firstOrCreate($data);

        return redirect()->route('admin.category.index');
    }
}
