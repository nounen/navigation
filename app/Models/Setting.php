<?php

namespace App\Models;

/**
 * Class Setting
 *
 * @package App\Models
 */
class Setting extends BaseModel
{
    protected $table = 'setting';

    protected $fillable = [
        'title',
        'keywords',
        'description',
    ];
}
