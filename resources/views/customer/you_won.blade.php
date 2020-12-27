@extends('layouts.customer.master')
@section('content')

    <!--begin::Content-->
    <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">


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
                                    <h1 class="font-weight-bolder text-dark mb-3">You Won</h1>
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


                <!--begin::Row-->
                <div class="row">

                    <div class="col-md-4">
                        <!--begin::Nav Panel Widget 4-->
                        <div class="card card-custom card-stretch gutter-b">
                            <!--begin::Body-->
                            <div class="card-body">
                                <!--begin::Wrapper-->
                                <div class="d-flex justify-content-between flex-column h-100">
                                    <!--begin::Container-->
                                    <div class="h-100">
                                        <!--begin::Header-->
                                        <div class="d-flex flex-column flex-center">
                                            <!--begin::Image-->
                                            <div class="bgi-no-repeat bgi-size-cover rounded min-h-180px w-100" style="background-image: url({{asset('media/stock-600x400/img-26.jpg')}})"></div>
                                            <!--end::Image-->

                                            <!--begin::Title-->
                                            <a href="#" class="card-title font-weight-bolder text-dark-75 text-hover-primary font-size-h4 m-0 pt-7 pb-1">Maths Class</a>
                                            <!--end::Title-->

                                            <!--begin::Text-->
                                            <div class="font-weight-bold text-dark-50 font-size-sm pb-7">11:20-12:00, Mark Liam</div>
                                            <!--end::Text-->
                                        </div>
                                        <!--end::Header-->
                                    </div>
                                    <!--eng::Container-->

                                    <!--begin::Footer-->
                                    <div class="d-flex flex-center" id="kt_sticky_toolbar_chat_toggler" data-toggle="tooltip" title="" data-placement="right" data-original-title="Chat Example">
                                        <h3 class="col-6">Price : 300 $</h3>

                                        <button class="btn btn-primary font-weight-bolder font-size-sm py-3 px-14" data-toggle="modal" data-target="#kt_chat_modal">View</button>
                                    </div>
                                    <!--end::Footer-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Body-->
                        </div>
                        <!--end::Nav Panel Widget 4-->
                    </div>
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
    </div>
    <!--end::Content-->
@endsection
