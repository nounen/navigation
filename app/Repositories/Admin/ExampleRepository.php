<?php

namespace App\Repositories\Admin;

use App\Models\Example;

/**
 * Class ArticleRepository
 * @package App\Repositories
 */
class ExampleRepository extends BaseRepository
{
    /**
     * 分页数据
     */
    public function paginate()
    {
        $fieldMaps = [];

        $articles = search(Example::class, $fieldMaps)
                    ->with('user')
                    ->ofUser()
                    ->orderBy('sort')
                    ->orderBy('created_at', 'DESC')
                    ->paginate();

        return $articles;
    }
}