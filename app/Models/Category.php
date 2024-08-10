<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $guarded = false;

    function parentName(): string
    {
        return Category::find($this->parent_id)->title ?? '';
    }
}


