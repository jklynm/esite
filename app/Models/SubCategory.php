<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'subcategories';

    protected $fillable = [
        // 'category',
        'title',
        'description',
        'status',
    ];

}
