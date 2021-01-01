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

    public function getProjectById ($id){
        return Project::where('id',$id)
            ->with('owner')
            ->with('designer')
            ->with('category')
            ->first();
    }

    public function changeProjectStatus ($id,$status){
        return Project::where('id',$id)
            ->update(['status'=>$status]);
    }

    public function getallActiveProject ($owner_id){
        return Project::where ('owner_id',$owner_id)
            ->where('status',2)
            ->with('project_image')
            ->get();
    }



}
