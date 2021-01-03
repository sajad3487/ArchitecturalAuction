<?php


namespace Modules\Project\Http\Service;


use Modules\Project\Repository\ProjectRepository;

class ProjectService
{
    /**
     * @var ProjectRepository
     */
    private $projectRepository;
    /**
     * @var ProjectRepository
     */
    private $proposalService;

    public function __construct(
        ProjectRepository $projectRepository,
        ProposalService $proposalService
    )
    {
        $this->projectRepository = $projectRepository;
        $this->proposalService = $proposalService;
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
        return $this->projectRepository->getallOwenerActiveProject ($owner_id);
    }

    public function getOwnerProject ($owner_id){
        return $this->projectRepository->getAllOwnerProject ($owner_id);
    }

    public function updateOwnerProject ($data,$id){
        return $this->projectRepository->update($data,$id);
    }

    public function allActiveProject (){
        return $this->projectRepository->getAllActiveProject ();
    }

    public function designerSentProposalProject ($user_id){
        $proposals = $this->proposalService->getAllProposalOfDesigner($user_id);
        foreach ($proposals as $key=>$proposal){
            $projects[$key] = $this->projectRepository->getProjectById($proposal->project_id);
        }
        return $projects;
    }

}
