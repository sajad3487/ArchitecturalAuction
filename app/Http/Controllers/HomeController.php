<?php

namespace App\Http\Controllers;

use App\Http\Requests\customerSearchProduct;
use App\Http\Requests\ProfileRequest;
use App\Http\Services\UserService;
use Modules\Category\Http\Services\CategoryService;
use Modules\Order\Http\Services\OrderService;
use Modules\Product\Http\Services\ProductService;

class HomeController extends Controller
{
    public function __construct(
    )
    {
        $this->middleware('auth');
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
        $active = 1;
        return view('customer.index',compact('active'));
    }

    public function designer_profile (){
        $customer = auth()->user();
        $active = 4;
        return view('customer.profile',compact('customer','active'));
    }

    public function owner_index (){
        $active = 1;
        return view('owner.index',compact('active'));
    }

    public function owner_profile (){
        $customer = auth()->user();
        $active = 5;
        return view('owner.profile',compact('customer','active'));
    }


}
