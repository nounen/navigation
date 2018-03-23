<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

/**
 * Class Article
 * @package App\Models
 */
class Example extends BaseModel
{
    protected $table = 'article';

    protected $fillable = [
        'title',
        'description',
        'cover',
        'content',
        'article_state',
        'is_allow_comment',
        'view_count',
        'sort',
        'user_id',
    ];

    protected $appends = [
        'article_state_name',
    ];

    // 发布
    const STATE_PUBLISH = 1;

    const STATE_PUBLISH_NAME = '发布';

    // 草稿
    const STATE_DRAFT = 2;

    const STATE_DRAFT_NAME = '草稿';

    public static function getArticleStates()
    {
        return [
            [
                'value' => self::STATE_PUBLISH,
                'name'  => self::STATE_PUBLISH_NAME,
            ],
            [
                'value' => self::STATE_DRAFT,
                'name'  => self::STATE_DRAFT_NAME,
            ],
        ];
    }

    /**
     * 所属分类, 多对多
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    /**
     * 所属作者, 一对一
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * 发布状态转中文
     *
     * @return string
     */
    public function getArticleStateNameAttribute()
    {
        return getXxxNameAttribute($this->getArticleStates(), $this->article_state);
    }
}
