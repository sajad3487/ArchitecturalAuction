<?php

namespace App\Http\Controllers;

use App\Http\Requests\customerSearchProduct;
use App\Http\Requests\ProfileRequest;
use App\Http\Services\UserService;
use Modules\Category\Http\Services\CategoryService;
use Modules\Order\Http\Services\OrderService;
use Modules\Product\Http\Services\ProductService;
use Modules\Project\Http\Service\ProjectService;

class HomeController extends Controller
{
    /**
     * @var ProjectService
     */
    private $projectService;
    /**
     * @var ProjectService
     */
    private $userService;

    public function __construct(
        ProjectService $projectService,
        UserService $userService
    )
    {
        $this->middleware('auth');
        $this->projectService = $projectService;
        $this->userService = $userService;
    }

    public function index(){
        return view('welcome');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function designer_index()
    {
        $user = $this->userService->getUserById(auth()->id());
        $projects = $this->projectService->allActiveProject();
        $active = 1;
        return view('customer.index',compact('active','user','projects'));
    }

    public function designer_profile (){
        $customer = auth()->user();
        $active = 4;
        return view('customer.profile',compact('customer','active'));
    }

    public function owner_index (){
        $user = $this->userService->getUserById(auth()->id());
        $projects = $this->projectService->getOwnerActiveProject ($user->id);
        $active = 1;
        return view('owner.index',compact('active','user','projects'));
    }

    public function owner_profile (){
        $customer = auth()->user();
        $active = 5;
        return view('owner.profile',compact('customer','active'));
    }


}
