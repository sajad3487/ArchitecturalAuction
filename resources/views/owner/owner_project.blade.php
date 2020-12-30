@extends('layouts.owner.master')
@section('content')

    <!--begin::Content-->
    <div class="content pt-2 d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class=" container ">
                <div class="row">
                    <div class="col-xl-12 mb-3">

                        <!--begin::Engage Widget 15-->
                        <div class="card card-custom ">
                            <div class="card-body rounded p-0 d-flex bg-light justify-content-between">
                                <div
                                    class="d-flex flex-column flex-lg-row-auto w-auto w-lg-350px w-xl-450px w-xxl-650px py-10 py-md-6 px-6 px-md-20 pr-lg-0">
                                    <h1 class="font-weight-bolder text-dark mb-2">Project No: 1</h1>
                                    {{--                                    <div class="font-size-h4 mb-8">Get Amazing Gadgets</div>--}}

                                </div>
                                <div class="d-none d-md-flex flex-row-fluid bgi-no-repeat bgi-position-y-center bgi-position-x-left bgi-size-cover mr-10"
                                     style="background-image: url({{asset('/media/bg/search.png')}}); background-size: 200px; background-position: right"
                                >
                                    {{--                                    <img src="{{asset('media/bg/search.png')}}" style="width: 100%" alt="">--}}

                                </div>
                            </div>
                        </div>
                        <!--end::Engage Widget 15-->
                    </div>
                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->

        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class=" container ">
                <!--begin::Card-->
                <div class="card card-custom">
                    <!--begin::Card header-->
                    <div class="card-header card-header-tabs-line nav-tabs-line-3x">
                        <!--begin::Toolbar-->
                        <div class="card-toolbar">
                            <ul class="nav nav-tabs nav-bold nav-tabs-line nav-tabs-line-3x">
                                <!--begin::Item-->
                                <li class="nav-item mr-3">
                                    <a class="nav-link active" data-toggle="tab" href="#kt_user_edit_tab_1">
                                        <span class="nav-icon"><span class="svg-icon"><!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <polygon points="0 0 24 0 24 24 0 24"/>
                                                    <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero"/>
                                                    <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3"/>
                                                </g>
                                            </svg><!--end::Svg Icon-->
                                            </span>
                                        </span>
                                        <span class="nav-text font-size-lg">Information</span>
                                    </a>
                                </li>
                                <!--end::Item-->

                                <!--begin::Item-->
                                <li class="nav-item mr-3">
                                    <a class="nav-link" data-toggle="tab" href="#kt_user_edit_tab_2">
                                        <span class="nav-icon"><span class="svg-icon"><!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <path d="M3.5,21 L20.5,21 C21.3284271,21 22,20.3284271 22,19.5 L22,8.5 C22,7.67157288 21.3284271,7 20.5,7 L10,7 L7.43933983,4.43933983 C7.15803526,4.15803526 6.77650439,4 6.37867966,4 L3.5,4 C2.67157288,4 2,4.67157288 2,5.5 L2,19.5 C2,20.3284271 2.67157288,21 3.5,21 Z" fill="#000000" opacity="0.3"/>
                                                <polygon fill="#000000" opacity="0.3" points="4 19 10 11 16 19"/>
                                                <polygon fill="#000000" points="11 19 15 14 19 19"/>
                                                <path d="M18,12 C18.8284271,12 19.5,11.3284271 19.5,10.5 C19.5,9.67157288 18.8284271,9 18,9 C17.1715729,9 16.5,9.67157288 16.5,10.5 C16.5,11.3284271 17.1715729,12 18,12 Z" fill="#000000" opacity="0.3"/>
                                            </g>
                                        </svg><!--end::Svg Icon-->
                                            </span>
                                        </span>
                                        <span class="nav-text font-size-lg">Media File</span>
                                    </a>
                                </li>
                                <!--end::Item-->

                                <!--begin::Item-->
                                <li class="nav-item mr-3">
                                    <a class="nav-link" data-toggle="tab" href="#kt_user_edit_tab_3">
                                        <span class="nav-icon"><span class="svg-icon"><!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Shield-user.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z" fill="#000000" opacity="0.3"/>
                                                <path d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z" fill="#000000"/>
                                                <rect fill="#000000" opacity="0.3" x="7" y="10" width="5" height="2" rx="1"/>
                                                <rect fill="#000000" opacity="0.3" x="7" y="14" width="9" height="2" rx="1"/>
                                            </g>
                                        </svg><!--end::Svg Icon-->
                                            </span>
                                        </span>
                                        <span class="nav-text font-size-lg">Wall</span>
                                    </a>
                                </li>
                                <!--end::Item-->
                            </ul>
                        </div>
                        <!--end::Toolbar-->
                    </div>
                    <!--end::Card header-->

                    <!--begin::Card body-->
                    <div class="card-body px-0">
                        <form class="form" id="kt_form">
                            <div class="tab-content">
                                <!--begin::Tab-->
                                <div class="tab-pane show active px-7" id="kt_user_edit_tab_1" role="tabpanel">
                                    <div class="pb-5 px-5">
                                        <div class="row">
                                            <div class="col-md-8">
                                                <h1>Project Title</h1>
                                                <h4>Project Subtitle</h4>
                                            </div>
                                            <div class="col-md-4">
                                                <h1 class="text-success">1000 $</h1>
                                                <h4>Price</h4>
                                            </div>
                                        </div>
                                        <div class="row mt-10">
                                            <div class="col-12">
                                                <h4>Description:</h4>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                            </div>
                                        </div>
                                        <div class="row mt-5">
                                            <div class="col-12">
                                                <h6>Objective:</h6>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                            </div>
                                        </div>
                                        <div class="row mt-5">
                                            <div class="col-12">
                                                <h6>Details:</h6>
                                                <ul>
                                                    <li>Item 1</li>
                                                    <li>Item 2</li>
                                                    <li>Item 3</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row mt-5">
                                            <h6 class="col-md-3">Deadline for submission:</h6>
                                            <p class="col-md-6">20/05/2020</p>
                                        </div>
                                        <div class="row">
                                            <h6 class="col-md-3">Date of result:</h6>
                                            <p class="col-md-6">20/05/2020</p>
                                        </div>


                                    </div>
                                </div>
                                <!--end::Tab-->

                                <!--begin::Tab-->
                                <div class="tab-pane px-7" id="kt_user_edit_tab_2" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-3 mt-2">
                                            <div class="card card-custom overlay">
                                                <div class="card-body p-0">
                                                    <div class="overlay-wrapper">
                                                        <img src="{{asset('media/project/project-1.jpg')}}" alt="" class="w-100 rounded"/>
                                                    </div>
                                                    <div class="overlay-layer">
                                                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow" >Explore</a>
                                                        <a href="#" class="btn font-weight-bold btn-light-primary btn-shadow ml-2">Purchase</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 mt-2">
                                            <div class="card card-custom overlay">
                                                <div class="card-body p-0">
                                                    <div class="overlay-wrapper">
                                                        <img src="{{asset('media/project/project-2.jpg')}}" alt="" class="w-100 rounded"/>
                                                    </div>
                                                    <div class="overlay-layer">
                                                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow" >Explore</a>
                                                        <a href="#" class="btn font-weight-bold btn-light-primary btn-shadow ml-2">Purchase</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 mt-2">
                                            <div class="card card-custom overlay">
                                                <div class="card-body p-0">
                                                    <div class="overlay-wrapper">
                                                        <img src="{{asset('media/project/project-3.jpg')}}" alt="" class="w-100 rounded"/>
                                                    </div>
                                                    <div class="overlay-layer">
                                                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow" >Explore</a>
                                                        <a href="#" class="btn font-weight-bold btn-light-primary btn-shadow ml-2">Purchase</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 mt-2">
                                            <div class="card card-custom overlay">
                                                <div class="card-body p-0">
                                                    <div class="overlay-wrapper">
                                                        <img src="{{asset('media/project/project-4.jpg')}}" alt="" class="w-100 rounded"/>
                                                    </div>
                                                    <div class="overlay-layer">
                                                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow" >Explore</a>
                                                        <a href="#" class="btn font-weight-bold btn-light-primary btn-shadow ml-2">Purchase</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 mt-2">
                                            <div class="card card-custom overlay">
                                                <div class="card-body p-0">
                                                    <div class="overlay-wrapper">
                                                        <img src="{{asset('media/project/project-4.jpg')}}" alt="" class="w-100 rounded"/>
                                                    </div>
                                                    <div class="overlay-layer">
                                                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow" >Explore</a>
                                                        <a href="#" class="btn font-weight-bold btn-light-primary btn-shadow ml-2">Purchase</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 mt-2">
                                            <div class="card card-custom overlay">
                                                <div class="card-body p-0">
                                                    <div class="overlay-wrapper">
                                                        <img src="{{asset('media/project/project-4.jpg')}}" alt="" class="w-100 rounded"/>
                                                    </div>
                                                    <div class="overlay-layer">
                                                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow" >Explore</a>
                                                        <a href="#" class="btn font-weight-bold btn-light-primary btn-shadow ml-2">Purchase</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 mt-2">
                                            <div class="card card-custom overlay">
                                                <div class="card-body p-0">
                                                    <div class="overlay-wrapper">
                                                        <img src="{{asset('media/project/project-4.jpg')}}" alt="" class="w-100 rounded"/>
                                                    </div>
                                                    <div class="overlay-layer">
                                                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow" >Explore</a>
                                                        <a href="#" class="btn font-weight-bold btn-light-primary btn-shadow ml-2">Purchase</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 mt-2">
                                            <div class="card card-custom overlay">
                                                <div class="card-body p-0">
                                                    <div class="overlay-wrapper">
                                                        <img src="{{asset('media/project/project-4.jpg')}}" alt="" class="w-100 rounded"/>
                                                    </div>
                                                    <div class="overlay-layer">
                                                        <a href="#" class="btn font-weight-bold btn-primary btn-shadow" >Explore</a>
                                                        <a href="#" class="btn font-weight-bold btn-light-primary btn-shadow ml-2">Purchase</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Tab-->

                                <!--begin::Tab-->
                                <div class="tab-pane px-7" id="kt_user_edit_tab_3" role="tabpanel">
                                    <!--begin::Body-->
                                    <div class="card-body pt-0">
                                        <!--begin::Row-->
                                        <div class="row">
                                            <div class="user-comment">
                                                <div class="comments-section pt-0 border-0">
                                                    <div class="comment-post">
                                                        <div class="comment-img"><img src="https://cdn.iconscout.com/icon/free/png-256/avatar-372-456324.png"/></div>
                                                        <div class="comment-details">
                                                            <p><span class="comment-author">Owner</span><span class="comment-time"></span></p>
                                                            <p class="comment-content">Maecenas eu maximus tellus, vel placerat massa. Nullam neque magna, hendrerit ac lacinia in, consequat nec ipsum. Vivamus tincidunt fringilla diam et sagittis. Suspendisse tincidunt hendrerit nisi, sit amet aliquet enim ornare at.</p>
                                                            <div class="comment-like-unlike">
                                                                <span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></span>
                                                                <span><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></span>
                                                                <span><i class="fa fa-reply" aria-hidden="true"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="comment-post-reply">
                                                        <div class="comment-img"><img src="https://cdn.iconscout.com/icon/free/png-256/avatar-375-456327.png"/></div>
                                                        <div class="comment-details">
                                                            <p><span class="comment-author">Designer</span><span class="comment-time"></span></p>
                                                            <p class="comment-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                                            <div class="comment-like-unlike">
                                                                <span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></span>
                                                                <span><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></span>
                                                                <span><i class="fa fa-reply" aria-hidden="true"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="comment-post">
                                                        <div class="comment-img"><img src="https://cdn.iconscout.com/icon/free/png-256/avatar-372-456324.png"/></div>
                                                        <div class="comment-details">
                                                            <p><span class="comment-author">Owner</span><span class="comment-time"></span></p>
                                                            <p class="comment-content">Nullam neque magna, hendrerit ac lacinia in, consequat nec ipsum. Vivamus tincidunt fringilla diam et sagittis. Suspendisse tincidunt hendrerit nisi, sit amet aliquet enim ornare at.</p>
                                                            <div class="comment-like-unlike">
                                                                <span><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></span>
                                                                <span><i class="fa fa-thumbs-o-down" aria-hidden="true"></i></span>
                                                                <span><i class="fa fa-reply" aria-hidden="true"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="comment-add">
                                                        <div class="field-comment">
                                                            <textarea rows="4" cols="50"></textarea>
                                                            <a class="btn btn--blue btn--medium pull-right" href="#">Post Your Question</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Body-->

                                    <!--begin::Footer-->
{{--                                    <div class="card-footer pb-0">--}}
{{--                                        <div class="row">--}}
{{--                                            <div class="col-xl-2"></div>--}}
{{--                                            <div class="col-xl-7">--}}
{{--                                                <div class="row">--}}
{{--                                                    <div class="col-3"></div>--}}
{{--                                                    <div class="col-9">--}}
{{--                                                        <a href="#" class="btn btn-light-primary font-weight-bold">Save changes</a>--}}
{{--                                                        <a href="#" class="btn btn-clean font-weight-bold">Cancel</a>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                    <!--end::Footer-->

                                </div>
                                <!--end::Tab-->

                            </div>
                        </form>
                    </div>
                    <!--begin::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Container-->
        </div>


    </div>
    <!--end::Content-->

@endsection
