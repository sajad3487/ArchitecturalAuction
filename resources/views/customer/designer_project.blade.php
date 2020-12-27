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
        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class=" container ">
                <div class="card card-custom">
                    <div class="card-body p-0">
                        <!--begin: Wizard-->
                        <div class="wizard wizard-3" id="kt_wizard_v3" data-wizard-state="step-first" data-wizard-clickable="true">
                            <!--begin: Wizard Nav-->
                            <div class="wizard-nav">
                                <div class="wizard-steps px-8 py-8 px-lg-15 py-lg-3">
                                    <!--begin::Wizard Step 1 Nav-->
                                    <div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
                                        <div class="wizard-label">
                                            <h3 class="wizard-title">
                                                <span>1.</span> Information
                                            </h3>
                                            <div class="wizard-bar"></div>
                                        </div>
                                    </div>
                                    <!--end::Wizard Step 1 Nav-->

                                    <!--begin::Wizard Step 2 Nav-->
                                    <div class="wizard-step" data-wizard-type="step">
                                        <div class="wizard-label">
                                            <h3 class="wizard-title">
                                                <span>2.</span> Media File
                                            </h3>
                                            <div class="wizard-bar"></div>
                                        </div>
                                    </div>
                                    <!--end::Wizard Step 2 Nav-->

                                    <!--begin::Wizard Step 3 Nav-->
                                    <div class="wizard-step" data-wizard-type="step">
                                        <div class="wizard-label">
                                            <h3 class="wizard-title">
                                                <span>3.</span> Wall
                                            </h3>
                                            <div class="wizard-bar"></div>
                                        </div>
                                    </div>
                                    <!--end::Wizard Step 3 Nav-->

                                </div>
                            </div>
                            <!--end: Wizard Nav-->

                            <!--begin: Wizard Body-->
                            <div class="row justify-content-center py-2 px-8 py-lg-2 px-lg-10">
                                <div class="col-xl-12 px-10">
                                    <!--begin: Wizard Form-->
                                    <form class="form" id="kt_form">
                                        <!--begin: Wizard Step 1-->
                                        <div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
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
                                        <!--end: Wizard Step 1-->

                                        <!--begin: Wizard Step 2-->
                                        <div class="pb-5" data-wizard-type="step-content">

                                        </div>
                                        <!--end: Wizard Step 2-->

                                        <!--begin: Wizard Step 3-->
                                        <div class="pb-5" data-wizard-type="step-content">


                                        </div>
                                        <!--end: Wizard Step 3-->

                                        <!--begin: Wizard Actions-->
                                        <div class="d-flex justify-content-between border-top mt-5 pt-10">
                                            <div class="mr-2">

                                            </div>
                                            <div>

                                            </div>
                                        </div>
                                        <!--end: Wizard Actions-->
                                    </form>
                                    <!--end: Wizard Form-->
                                </div>
                            </div>
                            <!--end: Wizard Body-->
                        </div>
                        <!--end: Wizard-->
                    </div>
                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->

    </div>
    <!--end::Content-->

@endsection
