<?php

namespace App\Models;

/**
 * Class Category
 *
 * @package App\Models
 */
class Category extends BaseModel
{
    protected $table = 'category';

    protected $fillable = [
        'parent_id',
        'root_id',
        'level',
        'max_level',
        'name',
        'sort',
    ];
}