<?php

namespace Modules\Project\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProjectController extends Controller
{
    public function __construct(

    )
    {

    }

    public function designer_won_project (){
        $active = 3 ;
        return view('customer.you_won',compact('active'));
    }

    public function designer_project (){
        return view('customer.designer_project');

    }
}
