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

        if($product = Product::where('item_id', $data['item_id'])->where('color_id', $data['color_id'])->first()) {
            foreach ($product->images() as $image) {
                Storage::disk('public')->delete($image->path);
                $image->delete();
            }
        }

        $product = Product::updateOrCreate(['item_id' => $data['item_id'], 'color_id' => $data['color_id']], $data);


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
