<?php


namespace Modules\Project\Http\Service;


use Modules\Project\Repository\ProjectRepository;

class ProjectService
{
    /**
     * @var ProjectRepository
     */
    private $projectRepository;

    public function __construct(
        ProjectRepository $projectRepository
    )
    {
        $this->projectRepository = $projectRepository;
    }

    public function createProject ($data){
        return $this->projectRepository->create($data);
    }

    public function getProject ($id){
        return $this->projectRepository->getProjectById($id);
    }

    public function changeStatus ($project_id,$status){
        return $this->projectRepository->changeProjectStatus ($project_id,$status);
    }

    public function getOwnerActiveProject ($owner_id){
        return $this->projectRepository->getallActiveProject ($owner_id);
    }

}
