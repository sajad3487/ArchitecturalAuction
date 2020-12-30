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

}
