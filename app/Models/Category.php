<?php

namespace App\Models;

/**
 * Class Category
 *
 * @package App\Models
 */
class Category extends BaseModel
{
    // 潜力平台
    const TYPE_PLATFORM_ID = 1;

    // 主流B2C
    const TYPE_B2C_ID = 2;

    // 亚马逊
    const TYPE_AMAZON_ID = 3;

    // 左侧导航
    const TYPE_LEFT_ID = 4;

    protected $table = 'category';

    protected $fillable = [
        'parent_id',
        'root_id',
        'level',
        'max_level',
        'name',
        'sort',
    ];

    /**
     * 分类的子集
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subs()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id')->orderBy('sort');
    }

    /**
     * 分类的链接
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function links()
    {
        return $this->hasMany(Link::class, 'category_id', 'id')->orderBy('sort');
    }
}