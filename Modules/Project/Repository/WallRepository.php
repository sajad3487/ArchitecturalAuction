<?php


namespace Modules\Project\Repository;


use Modules\Project\Entities\wall;

class WallRepository
{
    /**
     * @var wall
     */
    public $model;

    public function __construct()
    {
        $this->model = new wall();
    }

}
