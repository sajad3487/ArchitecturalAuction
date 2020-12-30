<?php

namespace Modules\Project\Http\Controllers;

use App\Http\Services\UserService;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Carbon;
use Modules\Category\Http\Service\CategoryService;
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

    public function __construct(
        UserService $userService,
        CategoryService $categoryService,
        ProjectService $projectService
    )
    {
        $this->userService = $userService;
        $this->categoryService = $categoryService;
        $this->projectService = $projectService;
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
        $data['owner_id']=auth()->id();
        $date = Carbon::parse($request->deadline)->timestamp;
        $data['deadline'] = date('Y-m-d H:i:s',$date);
        $project = $this->projectService->createProject($data);

        return redirect("owner/project/".$project->id."/invoice");
    }

    public function owner_active_project (){
        $user = $this->userService->getUserById(auth()->id());
        $active = 3 ;
        return view('owner.active_project',compact('active','user'));
    }

    public function owner_project (){
        $user = $this->userService->getUserById(auth()->id());
        $active = 4 ;
        return view('owner.owner_project',compact('active','user'));
    }

    public function view_project_proposal (){
        $user = $this->userService->getUserById(auth()->id());
        return view('owner.project_proposal');
    }

    public function view_project_invoice ($id){
        dd($id);
    }

}
