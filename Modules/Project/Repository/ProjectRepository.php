<?php


namespace Modules\Project\Repository;


use App\DesignPatterns\Repository;
use Modules\Project\Entities\Project;

class ProjectRepository extends Repository
{
    /**
     * @var Project
     */
    public $model;

    public function __construct()
    {
        $this->model = new Project();
    }



}
