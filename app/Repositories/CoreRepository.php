<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class CoreRepository
{
    /**
     * @var Model
     */
    protected $model; // С какой моделью работает

    /**
     * CoreRepository constructor.
     */
    public function __construct()
    {
        /**
         * Порождаем модель с помощью ларка-функции app
         * тоже самое что app('App\Models\BlogCategory')
         */
        $this->model = app($this->getModelClass());
    }

    abstract protected function getModelClass();

    /**
     * @return \Illuminate\Contracts\Foundation\Application|Model|mixed
     * Работаем со второй копией модели,
     * а первую оставляем чистой
     */
    protected function startConditions()
    {
        return clone $this->model;
    }
}