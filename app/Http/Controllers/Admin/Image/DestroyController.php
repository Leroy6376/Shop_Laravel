<?php

namespace App\Http\Controllers\Admin\Image;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Support\Facades\Storage;

class DestroyController extends Controller
{
    public function __invoke(Image $image)
    {
        Storage::disk('public')->delete($image->path);
        $product_id = $image->product_id;
        $image->delete();

        return redirect()->route('admin.product.show', $product_id);
    }
}
