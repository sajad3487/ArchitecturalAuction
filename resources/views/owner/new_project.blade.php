@extends('layouts.owner.master')
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
                                    <h1 class="font-weight-bolder text-dark mb-2">
                                        @if(isset($project))
                                            Project No : {{$project->id ?? ''}}
                                            @else
                                            New Project
                                            @endif
                                    </h1>
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

                        <form class="form" action="
                            @if(isset($project))
                            {{url("owner/project/$project->id/update")}}
                            @else
                            {{url("owner/project/store")}}
                            @endif
                            " method="post" enctype="multipart/form-data">

                            @if(isset($project))
                                @method('PUT')
                            @endif

                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Title</label>
                                    <input type="text" name="title" class="form-control form-control-solid" value="{{old('title') ?? $project->title ?? ''}}" placeholder="Project title"  required/>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Category</label>
                                            <select class="form-control form-control-solid" @if(isset($project)) disabled @endif name="category_id" required>
                                                <option>Please select your category</option>
                                                @foreach($categories as $category)
                                                <option @if(isset($project) && $project->category->id == $category->id)selected @endif value="{{$category->id ?? ''}}">{{$category->title ?? ''}}</option>
                                                    @foreach($category->subCategory as $subCate)
                                                        <option @if(isset($project) && $project->category->id == $category->id)selected @endif value="{{$category->id ?? ''}}">--- {{$subCate->title ?? ''}}</option>
                                                        @endforeach
                                                    @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Country</label>
                                            <select name="country" required
                                                    class="form-control form-control-solid">
                                                <option value="" selected>Select
                                                </option>
                                                <option value="Afghanistan">
                                                    Afghanistan
                                                </option>
                                                <option value="Åland Islands">Åland
                                                    Islands
                                                </option>
                                                <option value="Albania">Albania</option>
                                                <option value="Algeria">Algeria</option>
                                                <option value="American Samoa">American
                                                    Samoa
                                                </option>
                                                <option value="Andorra">Andorra</option>
                                                <option value="Angola">Angola</option>
                                                <option value="Anguilla">Anguilla
                                                </option>
                                                <option value="Antarctica">Antarctica
                                                </option>
                                                <option value="Antigua and Barbuda">
                                                    Antigua and Barbuda
                                                </option>
                                                <option value="Argentina">Argentina
                                                </option>
                                                <option value="Armenia">Armenia</option>
                                                <option value="Aruba">Aruba</option>
                                                <option value="Australia">Australia
                                                </option>
                                                <option value="Austria">Austria</option>
                                                <option value="Azerbaijan">Azerbaijan
                                                </option>
                                                <option value="Bahamas">Bahamas</option>
                                                <option value="Bahrain">Bahrain</option>
                                                <option value="Bangladesh">Bangladesh
                                                </option>
                                                <option value="Barbados">Barbados
                                                </option>
                                                <option value="Belarus">Belarus</option>
                                                <option value="Belgium">Belgium</option>
                                                <option value="Belize">Belize</option>
                                                <option value="Benin">Benin</option>
                                                <option value="Bermuda">Bermuda</option>
                                                <option value="Bhutan">Bhutan</option>
                                                <option
                                                    value="Bolivia, Plurinational State of">
                                                    Bolivia, Plurinational State of
                                                </option>
                                                <option
                                                    value="Bonaire, Sint Eustatius and Saba">
                                                    Bonaire, Sint Eustatius and Saba
                                                </option>
                                                <option value="Bosnia and Herzegovina">
                                                    Bosnia and Herzegovina
                                                </option>
                                                <option value="Botswana">Botswana
                                                </option>
                                                <option value="Bouvet Island">Bouvet
                                                    Island
                                                </option>
                                                <option value="Brazil">Brazil</option>
                                                <option
                                                    value="British Indian Ocean Territory">
                                                    British Indian Ocean Territory
                                                </option>
                                                <option value="Brunei Darussalam">Brunei
                                                    Darussalam
                                                </option>
                                                <option value="Bulgaria">Bulgaria
                                                </option>
                                                <option value="Burkina Faso">Burkina
                                                    Faso
                                                </option>
                                                <option value="Burundi">Burundi</option>
                                                <option value="Cambodia">Cambodia
                                                </option>
                                                <option value="Cameroon">Cameroon
                                                </option>
                                                <option value="Canada">Canada</option>
                                                <option value="Cape Verde">Cape Verde
                                                </option>
                                                <option value="Cayman Islands">Cayman
                                                    Islands
                                                </option>
                                                <option
                                                    value="Central African Republic">
                                                    Central African Republic
                                                </option>
                                                <option value="Chad">Chad</option>
                                                <option value="Chile">Chile</option>
                                                <option value="China">China</option>
                                                <option value="Christmas Island">
                                                    Christmas Island
                                                </option>
                                                <option value="Cocos (Keeling) Islands">
                                                    Cocos (Keeling) Islands
                                                </option>
                                                <option value="Colombia">Colombia
                                                </option>
                                                <option value="Comoros">Comoros</option>
                                                <option value="Congo">Congo</option>
                                                <option
                                                    value="Congo, the Democratic Republic of the">
                                                    Congo, the Democratic Republic of
                                                    the
                                                </option>
                                                <option value="Cook Islands">Cook
                                                    Islands
                                                </option>
                                                <option value="Costa Rica">Costa Rica
                                                </option>
                                                <option value="Côte d'Ivoire">Côte
                                                    d'Ivoire
                                                </option>
                                                <option value="Croatia">Croatia</option>
                                                <option value="Cuba">Cuba</option>
                                                <option value="Curaçao">Curaçao</option>
                                                <option value="Cyprus">Cyprus</option>
                                                <option value="Czech Republic">Czech
                                                    Republic
                                                </option>
                                                <option value="Denmark">Denmark</option>
                                                <option value="Djibouti">Djibouti
                                                </option>
                                                <option value="Dominica">Dominica
                                                </option>
                                                <option value="Dominican Republic">
                                                    Dominican Republic
                                                </option>
                                                <option value="Ecuador">Ecuador</option>
                                                <option value="Egypt">Egypt</option>
                                                <option value="El Salvador">El
                                                    Salvador
                                                </option>
                                                <option value="Equatorial Guinea">
                                                    Equatorial Guinea
                                                </option>
                                                <option value="Eritrea">Eritrea</option>
                                                <option value="Estonia">Estonia</option>
                                                <option value="Ethiopia">Ethiopia
                                                </option>
                                                <option
                                                    value="Falkland Islands (Malvinas)">
                                                    Falkland Islands (Malvinas)
                                                </option>
                                                <option value="Faroe Islands">Faroe
                                                    Islands
                                                </option>
                                                <option value="Fiji">Fiji</option>
                                                <option value="Finland">Finland</option>
                                                <option value="France">France</option>
                                                <option value="French Guiana">French
                                                    Guiana
                                                </option>
                                                <option value="French Polynesia">French
                                                    Polynesia
                                                </option>
                                                <option
                                                    value="French Southern Territories">
                                                    French Southern Territories
                                                </option>
                                                <option value="Gabon">Gabon</option>
                                                <option value="Gambia">Gambia</option>
                                                <option value="Georgia">Georgia</option>
                                                <option value="Germany">Germany</option>
                                                <option value="Ghana">Ghana</option>
                                                <option value="Gibraltar">Gibraltar
                                                </option>
                                                <option value="Greece">Greece</option>
                                                <option value="Greenland">Greenland
                                                </option>
                                                <option value="Grenada">Grenada</option>
                                                <option value="Guadeloupe">Guadeloupe
                                                </option>
                                                <option value="Guam">Guam</option>
                                                <option value="Guatemala">Guatemala
                                                </option>
                                                <option value="Guernsey">Guernsey
                                                </option>
                                                <option value="Guinea">Guinea</option>
                                                <option value="Guinea-Bissau">
                                                    Guinea-Bissau
                                                </option>
                                                <option value="Guyana">Guyana</option>
                                                <option value="Haiti">Haiti</option>
                                                <option
                                                    value="Heard Island and McDonald Islands">
                                                    Heard Island and McDonald Islands
                                                </option>
                                                <option
                                                    value="Holy See (Vatican City State)">
                                                    Holy See (Vatican City State)
                                                </option>
                                                <option value="Honduras">Honduras
                                                </option>
                                                <option value="Hong Kong">Hong Kong
                                                </option>
                                                <option value="Hungary">Hungary</option>
                                                <option value="Iceland">Iceland</option>
                                                <option value="India">India</option>
                                                <option value="Indonesia">Indonesia
                                                </option>
                                                <option
                                                    value="Iran, Islamic Republic of">
                                                    Iran, Islamic Republic of
                                                </option>
                                                <option value="Iraq">Iraq</option>
                                                <option value="Ireland">Ireland</option>
                                                <option value="Isle of Man">Isle of
                                                    Man
                                                </option>
                                                <option value="Israel">Israel</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Jamaica">Jamaica</option>
                                                <option value="Japan">Japan</option>
                                                <option value="Jersey">Jersey</option>
                                                <option value="Jordan">Jordan</option>
                                                <option value="Kazakhstan">Kazakhstan
                                                </option>
                                                <option value="Kenya">Kenya</option>
                                                <option value="Kiribati">Kiribati
                                                </option>
                                                <option
                                                    value="Korea, Democratic People's Republic of">
                                                    Korea, Democratic People's Republic
                                                    of
                                                </option>
                                                <option value="Korea, Republic of">
                                                    Korea, Republic of
                                                </option>
                                                <option value="Kuwait">Kuwait</option>
                                                <option value="Kyrgyzstan">Kyrgyzstan
                                                </option>
                                                <option
                                                    value="Lao People's Democratic Republic">
                                                    Lao People's Democratic Republic
                                                </option>
                                                <option value="Latvia">Latvia</option>
                                                <option value="Lebanon">Lebanon</option>
                                                <option value="Lesotho">Lesotho</option>
                                                <option value="Liberia">Liberia</option>
                                                <option value="Libya">Libya</option>
                                                <option value="Liechtenstein">
                                                    Liechtenstein
                                                </option>
                                                <option value="Lithuania">Lithuania
                                                </option>
                                                <option value="Luxembourg">Luxembourg
                                                </option>
                                                <option value="Macao">Macao</option>
                                                <option
                                                    value="Macedonia, the former Yugoslav Republic of">
                                                    Macedonia, the former Yugoslav
                                                    Republic of
                                                </option>
                                                <option value="Madagascar">Madagascar
                                                </option>
                                                <option value="Malawi">Malawi</option>
                                                <option value="Malaysia">Malaysia
                                                </option>
                                                <option value="Maldives">Maldives
                                                </option>
                                                <option value="Mali">Mali</option>
                                                <option value="Malta">Malta</option>
                                                <option value="Marshall Islands">
                                                    Marshall Islands
                                                </option>
                                                <option value="Martinique">Martinique
                                                </option>
                                                <option value="Mauritania">Mauritania
                                                </option>
                                                <option value="Mauritius">Mauritius
                                                </option>
                                                <option value="Mayotte">Mayotte</option>
                                                <option value="Mexico">Mexico</option>
                                                <option
                                                    value="Micronesia, Federated States of">
                                                    Micronesia, Federated States of
                                                </option>
                                                <option value="Moldova, Republic of">
                                                    Moldova, Republic of
                                                </option>
                                                <option value="Monaco">Monaco</option>
                                                <option value="Mongolia">Mongolia
                                                </option>
                                                <option value="Montenegro">Montenegro
                                                </option>
                                                <option value="Montserrat">Montserrat
                                                </option>
                                                <option value="Morocco">Morocco</option>
                                                <option value="Mozambique">Mozambique
                                                </option>
                                                <option value="Myanmar">Myanmar</option>
                                                <option value="Namibia">Namibia</option>
                                                <option value="Nauru">Nauru</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Netherlands">
                                                    Netherlands
                                                </option>
                                                <option value="New Caledonia">New
                                                    Caledonia
                                                </option>
                                                <option value="New Zealand">New
                                                    Zealand
                                                </option>
                                                <option value="Nicaragua">Nicaragua
                                                </option>
                                                <option value="Niger">Niger</option>
                                                <option value="Nigeria">Nigeria</option>
                                                <option value="Niue">Niue</option>
                                                <option value="Norfolk Island">Norfolk
                                                    Island
                                                </option>
                                                <option
                                                    value="Northern Mariana Islands">
                                                    Northern Mariana Islands
                                                </option>
                                                <option value="Norway">Norway</option>
                                                <option value="Oman">Oman</option>
                                                <option value="Pakistan">Pakistan
                                                </option>
                                                <option value="Palau">Palau</option>
                                                <option
                                                    value="Palestinian Territory, Occupied">
                                                    Palestinian Territory, Occupied
                                                </option>
                                                <option value="Panama">Panama</option>
                                                <option value="Papua New Guinea">Papua
                                                    New Guinea
                                                </option>
                                                <option value="Paraguay">Paraguay
                                                </option>
                                                <option value="Peru">Peru</option>
                                                <option value="Philippines">
                                                    Philippines
                                                </option>
                                                <option value="Pitcairn">Pitcairn
                                                </option>
                                                <option value="Poland">Poland</option>
                                                <option value="Portugal">Portugal
                                                </option>
                                                <option value="Puerto Rico">Puerto
                                                    Rico
                                                </option>
                                                <option value="Qatar">Qatar</option>
                                                <option value="Réunion">Réunion</option>
                                                <option value="Romania">Romania</option>
                                                <option value="Russian Federation">
                                                    Russian Federation
                                                </option>
                                                <option value="Rwanda">Rwanda</option>
                                                <option value="Saint Barthélemy">Saint
                                                    Barthélemy
                                                </option>
                                                <option
                                                    value="Saint Helena, Ascension and Tristan da Cunha">
                                                    Saint Helena, Ascension and Tristan
                                                    da Cunha
                                                </option>
                                                <option value="Saint Kitts and Nevis">
                                                    Saint Kitts and Nevis
                                                </option>
                                                <option value="Saint Lucia">Saint
                                                    Lucia
                                                </option>
                                                <option
                                                    value="Saint Martin (French part)">
                                                    Saint Martin (French part)
                                                </option>
                                                <option
                                                    value="Saint Pierre and Miquelon">
                                                    Saint Pierre and Miquelon
                                                </option>
                                                <option
                                                    value="Saint Vincent and the Grenadines">
                                                    Saint Vincent and the Grenadines
                                                </option>
                                                <option value="Samoa">Samoa</option>
                                                <option value="San Marino">San Marino
                                                </option>
                                                <option value="Sao Tome and Principe">
                                                    Sao Tome and Principe
                                                </option>
                                                <option value="Saudi Arabia">Saudi
                                                    Arabia
                                                </option>
                                                <option value="Senegal">Senegal</option>
                                                <option value="Serbia">Serbia</option>
                                                <option value="Seychelles">Seychelles
                                                </option>
                                                <option value="Sierra Leone">Sierra
                                                    Leone
                                                </option>
                                                <option value="Singapore">Singapore
                                                </option>
                                                <option
                                                    value="Sint Maarten (Dutch part)">
                                                    Sint Maarten (Dutch part)
                                                </option>
                                                <option value="Slovakia">Slovakia
                                                </option>
                                                <option value="Slovenia">Slovenia
                                                </option>
                                                <option value="Solomon Islands">Solomon
                                                    Islands
                                                </option>
                                                <option value="Somalia">Somalia</option>
                                                <option value="South Africa">South
                                                    Africa
                                                </option>
                                                <option
                                                    value="South Georgia and the South Sandwich Islands">
                                                    South Georgia and the South Sandwich
                                                    Islands
                                                </option>
                                                <option value="South Sudan">South
                                                    Sudan
                                                </option>
                                                <option value="Spain">Spain</option>
                                                <option value="Sri Lanka">Sri Lanka
                                                </option>
                                                <option value="Sudan">Sudan</option>
                                                <option value="Suriname">Suriname
                                                </option>
                                                <option value="Svalbard and Jan Mayen">
                                                    Svalbard and Jan Mayen
                                                </option>
                                                <option value="Swaziland">Swaziland
                                                </option>
                                                <option value="Sweden">Sweden</option>
                                                <option value="Switzerland">
                                                    Switzerland
                                                </option>
                                                <option value="Syrian Arab Republic">
                                                    Syrian Arab Republic
                                                </option>
                                                <option
                                                    value="Taiwan, Province of China">
                                                    Taiwan, Province of China
                                                </option>
                                                <option value="Tajikistan">Tajikistan
                                                </option>
                                                <option
                                                    value="Tanzania, United Republic of">
                                                    Tanzania, United Republic of
                                                </option>
                                                <option value="Thailand">Thailand
                                                </option>
                                                <option value="Timor-Leste">
                                                    Timor-Leste
                                                </option>
                                                <option value="Togo">Togo</option>
                                                <option value="Tokelau">Tokelau</option>
                                                <option value="Tonga">Tonga</option>
                                                <option value="Trinidad and Tobago">
                                                    Trinidad and Tobago
                                                </option>
                                                <option value="Tunisia">Tunisia</option>
                                                <option value="Turkey">Turkey</option>
                                                <option value="Turkmenistan">
                                                    Turkmenistan
                                                </option>
                                                <option
                                                    value="Turks and Caicos Islands">
                                                    Turks and Caicos Islands
                                                </option>
                                                <option value="Tuvalu">Tuvalu</option>
                                                <option value="Uganda">Uganda</option>
                                                <option value="Ukraine">Ukraine</option>
                                                <option value="United Arab Emirates">
                                                    United Arab Emirates
                                                </option>
                                                <option value="United Kingdom">United
                                                    Kingdom
                                                </option>
                                                <option value="United States">United
                                                    States
                                                </option>
                                                <option
                                                    value="United States Minor Outlying Islands">
                                                    United States Minor Outlying Islands
                                                </option>
                                                <option value="Uruguay">Uruguay</option>
                                                <option value="Uzbekistan">Uzbekistan
                                                </option>
                                                <option value="Vanuatu">Vanuatu</option>
                                                <option
                                                    value="Venezuela, Bolivarian Republic of">
                                                    Venezuela, Bolivarian Republic of
                                                </option>
                                                <option value="Viet Nam">Viet Nam
                                                </option>
                                                <option value="Virgin Islands, British">
                                                    Virgin Islands, British
                                                </option>
                                                <option value="Virgin Islands, U.S.">
                                                    Virgin Islands, U.S.
                                                </option>
                                                <option value="Wallis and Futuna">Wallis
                                                    and Futuna
                                                </option>
                                                <option value="Western Sahara">Western
                                                    Sahara
                                                </option>
                                                <option value="Yemen">Yemen</option>
                                                <option value="Zambia">Zambia</option>
                                                <option value="Zimbabwe">Zimbabwe
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Size (m2)</label>
                                            <input type="number" value="{{old('size') ?? $project->size ?? ''}}" @if(isset($project)) disabled @endif name="size" class="form-control form-control-solid" placeholder="Project size" required/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" name="address" class="form-control form-control-solid" placeholder="Project address" value="{{old('address') ?? $project->address ?? ''}}" required/>
                                </div>
                                <div class="form-group">
                                    <label for="exampleTextarea">Description</label>
                                    <textarea name="description" class="form-control form-control-solid" rows="3"  required>{{old('description') ?? $project->description ?? ''}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleTextarea">Objectives</label>
                                    <textarea name="objective" class="form-control form-control-solid" rows="3" >{{old('objective') ?? $project->objective ?? ''}}</textarea>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="exampleTextarea">Deadline</label>
                                        <div class="">
                                            <input type="text" name="deadline" class="form-control" id="kt_datepicker_1"  readonly placeholder="Select date" value="{{old('deadline') ?? $project->deadline ?? ''}}" required/>
                                        </div>
                                    </div>

                                    <div class="form-group  col-md-4 ">
                                        <label>File Browser</label>
                                        <div></div>
                                        <div class="custom-file">
                                            <input type="file" name="file" class="custom-file-input" id="customFile" required/>
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>
{{--                                <div class="form-group row">--}}
{{--                                    <label class="col-form-label text-right col-lg-3 col-sm-12">Minimum Setup</label>--}}
{{--                                    <div class="col-lg-4 col-md-9 col-sm-12">--}}
{{--                                        <input type="text" name="deadline" class="form-control" id="kt_datepicker_1"  readonly placeholder="Select date"/>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>

                            <div class="card-footer">
                                <a href="@if(isset($project)) {{url("owner/project/$project->id/view")}}@else{{url('owner/project')}}@endif" class="btn btn-secondary">Cancel</a>
                                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->

    </div>
    <!--end::Content-->


@endsection
