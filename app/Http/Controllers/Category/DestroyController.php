<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
    public function __invoke(Category $category)
    {
        $categories = Category::where('parent_id', $category->id)->get();
        foreach ($categories as $cat) {
            $cat->update(
                [
                    'title' => $cat->title,
                    'parent_id' => $category->parent_id,
                    'level' =>$cat->level - 1
                ]
            );
        }
        $category->delete();
        return redirect()->route('category.index');
    }
}
