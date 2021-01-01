<?php

namespace Modules\Project\Http\Controllers;

use App\Http\Services\UserService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Carbon;
use Modules\Category\Http\Service\CategoryService;
use Modules\Media\Http\Service\MediaService;
use Modules\Project\Http\Service\ProjectService;

class ProjectController extends Controller
{
    /**
     * @var UserService
     */
    private $userService;
    /**
     * @var CategoryService
     */
    private $categoryService;
    /**
     * @var ProjectService
     */
    private $projectService;
    /**
     * @var MediaService
     */
    private $mediaService;

    public function __construct(
        UserService $userService,
        CategoryService $categoryService,
        ProjectService $projectService,
        MediaService $mediaService
    )
    {
        $this->userService = $userService;
        $this->categoryService = $categoryService;
        $this->projectService = $projectService;
        $this->mediaService = $mediaService;
    }

    public function designer_won_project (){
        $user = $this->userService->getUserById(auth()->id());
        $active = 3 ;
        return view('customer.you_won',compact('active','user'));
    }

    public function designer_project (){
        return view('customer.designer_project');
    }

    public function all_owner_project (){
        $user = $this->userService->getUserById(auth()->id());
        $active = 4 ;
        return view('owner.all_project',compact('active','user'));
    }

    public function owner_new_project (){
        $user = $this->userService->getUserById(auth()->id());
        $active = 2 ;
        $categories = $this->categoryService->getAllCategory();
        return view('owner.new_project',compact('active','user','categories'));
    }

    public function owner_store_project (Request $request){
        $data = $request->all();
        unset($data['file']);
        $data['owner_id']=auth()->id();
        $date = Carbon::parse($request->deadline)->timestamp;
        $data['deadline'] = date('Y-m-d H:i:s',$date);
        $data['net_price'] = $this->calculate_net_price($data['category_id'],$data['size']);
        $data['total_price'] = (int)$this->calculate_total_price($data['category_id'],$data['net_price']);
        $project = $this->projectService->createProject($data);

        if (isset($request->file)){
            $image['media_path'] =$this->mediaService->uploadMedia($request->file);
            $image['type'] ='project';
            $image['owner_id'] = $project->id;
            $this->mediaService->createMedia ($image);
        }

        return redirect("owner/project/".$project->id."/invoice");
    }

    public function owner_active_project (){
        $user = $this->userService->getUserById(auth()->id());
        $projects = $this->projectService->getOwnerActiveProject ($user->id);
        $active = 3 ;

        return view('owner.active_project',compact('active','user','projects'));
    }

    public function view_project_proposal (){
        $user = $this->userService->getUserById(auth()->id());
        return view('owner.project_proposal',compact('user'));
    }

    public function view_project_invoice ($id){
        $project = $this->projectService->getProject ($id);
        $user = $this->userService->getUserById(auth()->id());
        return view('owner.invoice',compact('project','user'));
    }

    public function calculate_net_price ($category_id,$size){
        $category = $this->categoryService->getCategoryById($category_id);
        $q = (int)round($size/($category->size));
        return $q * $category->price;
    }

    public function calculate_total_price ($category_id,$net_price){
        $category = $this->categoryService->getCategoryById($category_id);
        return $net_price* (1+($category->commission/100));
    }

    public function owner_pay_project ($project_id){
        $this->projectService->changeStatus($project_id,2);
        return redirect('owner/project/'.$project_id.'/view');
    }

    public function owner_view_project ($id){
        $user = $this->userService->getUserById(auth()->id());
        $project = $this->projectService->getProject($id);
        $active = 4 ;
        $images = $this->mediaService->getImagesOfProject ($project->id);
        return view('owner.owner_project',compact('active','user','project','images'));
    }

    public function owner_edit_project ($id){
        $project = $this->projectService->getProject($id);
        $user = $this->userService->getUserById(auth()->id());
        $active = 2 ;
        $categories = $this->categoryService->getAllCategory();
        return view('owner.new_project',compact('active','user','categories','project'));
    }

}
