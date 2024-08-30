<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\StoreRequest;
use App\Models\Image;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $images = Image::all();

        $data = $request->validated();

        $images = $data['images'];
        unset($data['images']);

        $product = Product::firstOrCreate($data);

        foreach ($images as $image) {
            $name = md5(Carbon::now() . '_' . $image->getClientOriginalName()) . '.' . $image->getClientOriginalExtension();

            \Intervention\Image\Facades\Image::make($image)->fit(600, 600)->save(storage_path('app/public/images/') . $name);

            Image::create([
                'product_id' => $product->id,
                'path' => 'images/' . $name,
                'url' => url('/storage/images/' . $name),
                'name' => $image->getClientOriginalName()
            ]);
        }

        return redirect()->route('admin.product.index');
    }
}
