<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'products';

    protected $fillable = [
        'category_id',
        'title',
        'price',
        'description',
        'image',
        'status',
    ];

    public function category()
    {
      return $this->belongsTo(Category::class,'category_id');
    }

}
