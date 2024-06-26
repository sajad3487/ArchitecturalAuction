@extends('layouts.owner.master')
@section('content')
    <!--begin::Content-->
    <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">

        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class=" container ">
                <div class="row">
                    <div class="col-lg-12">
                        <!--begin::Card-->
                        <div class="card card-custom">
                            <div class="card-header">
                                <h3 class="card-title">
                                    Profile
                                </h3>
                            </div>
                            <!--begin::Form-->
                            <form class="form" action="{{url("/designer/profile/update")}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body row">
                                    <div class="col-lg-9">
                                        @include('fragment.error')

                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label text-right px-0">Full Name :</label>
                                            <div class="col-lg-3">
                                                <input type="text" name="name" class="form-control" placeholder="Enter your name" value="{{$user->name  ?? ''}}" required/>
                                            </div>
                                            <label class="col-lg-3 col-form-label text-right px-0">Business Name :</label>
                                            <div class="col-lg-3">
                                                <input type="text" name="fname" class="form-control" placeholder="Enter your business name" value="{{$user->lname  ?? ''}}" required/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label text-right px-0">Email :</label>
                                            <div class="col-lg-3">
                                                <input type="text" name="email" class="form-control" placeholder="Enter your email" value="{{$user->email  ?? ''}}" disabled/>
                                            </div>
                                            <label class="col-lg-3 col-form-label text-right px-0">Phone Number :</label>
                                            <div class="col-lg-3">
                                                <input type="text" name="tel" class="form-control" placeholder="Enter phone number" value="{{$user->tel  ?? ''}}"/>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label text-right px-0">Address :</label>
                                            <div class="col-lg-9">
                                                <input type="text" name="address" class="form-control" placeholder="Enter your address" value="{{$user->address  ?? ''}}" />
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-3 col-form-label text-right px-0">Profile Picture :</label>
                                            <div class="col-lg-3">
                                                <div class="input-group">
                                                    <input type="file" name="file" class="custom-file-input" id="customFile"/>
                                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col-lg-3">
                                        <img src="{{asset($user->profile_picture)}}" alt="" style="width: 100%">
                                    </div>

                                </div>

                                <div class="card-footer">
                                    <div class="row">
                                        <div class="col-lg-5"></div>
                                        <div class="col-lg-7">
                                            <a href="{{url('owner')}}" type="reset" class="btn btn-secondary col-md-2 mr-2">Back</a>
                                            <button type="submit" class="btn btn-success col-md-2">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Card-->

                    </div>
                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    <!--end::Content-->

    @endsection
