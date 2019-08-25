<?php

namespace App\Repositories;

use App\Models\BlogPost as Model;

class BlogPostRepository extends CoreRepository
{
    protected function getModelClass()
    {
        return Model::class;
    }

    public function getAllWithPaginate($numberOfPages)
    {
        $fields = [
            'id',
            'title',
            'views',
            'published_at',
            'img'
        ];

        $result = $this->startConditions()
            ->select($fields)
            ->orderBy('id', 'DESC')
            ->paginate($numberOfPages);

        return $result;
    }

    public function getImage()
    {

    }

}