<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $guarded = false;

    function item()
    {
        return Item::find($this->item_id);
    }

    function color()
    {
        return Color::find($this->color_id)->title;
    }

    function images()
    {
        return Image::where('product_id', $this->id)->get();
    }

}
