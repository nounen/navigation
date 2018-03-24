<?php

namespace App\Models;

/**
 * Class Link
 *
 * @package App\Models
 */
class Link extends BaseModel
{
    protected $table = 'link';

    protected $fillable = [
        'category_id',
        'name',
        'url',
        'sort',
    ];
}
