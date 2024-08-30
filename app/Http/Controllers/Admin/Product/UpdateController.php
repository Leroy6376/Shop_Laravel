<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\UpdateRequest;
use App\Models\Image;
use App\Models\Product;
use Carbon\Carbon;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Product $product)
    {
        $data = $request->validated();

        $images = $data['images'];
        unset($data['images']);

        $product->update($data);

        foreach ($images as $image) {
            $name = md5(Carbon::now() . '_' . $image->getClientOriginalName()) . '.' . $image->getClientOriginalExtension();

            \Intervention\Image\Facades\Image::make($image)->fit(600, 600)->save(storage_path('app/public/images/') . $name);

            Image::create([
                'product_id' => $product->id,
                'path' => storage_path('/images/') . $name,
                'url' => url('/storage/images/' . $name),
                'name' => $image->getClientOriginalName()
            ]);
        }

        return view('admin.product.show', compact('product'));
    }
}
