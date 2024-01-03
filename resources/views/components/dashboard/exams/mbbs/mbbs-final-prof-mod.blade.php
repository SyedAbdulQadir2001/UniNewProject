@extends("layouts/dashboard-layout")

@section("title", "Profile")

@section("content")
    <div class="container-scroller">

        <x-dashboard.navbar/>

        <div class="container-fluid page-body-wrapper">


            <x-dashboard.sidebar/>


            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">

                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">MBBS FINAL PROF (MOD)</h4>
                                    <form class="form-sample">
                                        {{--                                        <p class="card-description"> Personal info </p>--}}
                                        <div class="row mt-5">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Enrollment Number</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">College Name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Full Name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Father Name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>



                                        </div>

                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">CNIC</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Address</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Date of Birth</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control" type="text" name="Date of Birth" id="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Remarks</label>
                                                    <div class="col-sm-9">
                                                        <textarea rows="3" class="form-control"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Status</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Part</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Registration Year</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Sex</label>
                                                    <div class="col-sm-9">
                                                        <select class="form-control" name="" id="">
                                                            <option value="m">Male</option>
                                                            <option value="f">Female</option>
                                                            <option value="o">Other</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Previous Reference</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Examination Year</label>
                                                    <div class="col-sm-9">
                                                        <input type="number" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group d-flex">


                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2" checked=""> Annual <i class="input-helper"></i></label>
                                                    </div>

                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2" > Suppli <i class="input-helper"></i></label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Pass</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 ">
                                                <div class="form-group d-flex gap-3">
                                                    <label class="col-form-label" for="">Subjects</label>


                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input" checked=""> Surgery 1 <i class="input-helper"></i></label>
                                                    </div>

                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input" checked=""> Surgery 2 <i class="input-helper"></i></label>
                                                    </div>

                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input" checked=""> Medicine 1 <i class="input-helper"></i></label>
                                                    </div>

                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input" checked=""> Medicine 2 <i class="input-helper"></i></label>
                                                    </div>

                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input" checked=""> Peadiatrics <i class="input-helper"></i></label>
                                                    </div>

                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input" checked=""> Gynaecology <i class="input-helper"></i></label>
                                                    </div>

                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input type="checkbox" class="form-check-input" checked=""> Obstetrics <i class="input-helper"></i></label>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">CO LABB</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Pass</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row d-flex mt-5">
                                            <div class="col-sm-6">

                                            </div>
                                            <div class="col-sm-6">

                                                <input class="btn btn-behance" type="submit" value="Submit">
                                            </div>
                                        </div>









                                        {{--  <div class="row">


                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Gender</label>
                                                    <div class="col-sm-9 ">
                                                        <select class="form-control">
                                                            <option>Male</option>
                                                            <option>Female</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Date of Birth</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control" placeholder="dd/mm/yyyy" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}

                                        {{--                                        <div class="row">--}}
                                        {{--                                            <div class="col-md-6">--}}
                                        {{--                                                <div class="form-group row">--}}
                                        {{--                                                    <label class="col-sm-3 col-form-label">Category</label>--}}
                                        {{--                                                    <div class="col-sm-9">--}}
                                        {{--                                                        <select class="form-control">--}}
                                        {{--                                                            <option>Category1</option>--}}
                                        {{--                                                            <option>Category2</option>--}}
                                        {{--                                                            <option>Category3</option>--}}
                                        {{--                                                            <option>Category4</option>--}}
                                        {{--                                                        </select>--}}
                                        {{--                                                    </div>--}}
                                        {{--                                                </div>--}}
                                        {{--                                            </div>--}}
                                        {{--                                            <div class="col-md-6">--}}
                                        {{--                                                <div class="form-group row">--}}
                                        {{--                                                    <label class="col-sm-3 col-form-label">Membership</label>--}}
                                        {{--                                                    <div class="col-sm-4">--}}
                                        {{--                                                        <div class="form-check">--}}
                                        {{--                                                            <label class="form-check-label">--}}
                                        {{--                                                                <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked> Free </label>--}}
                                        {{--                                                        </div>--}}
                                        {{--                                                    </div>--}}
                                        {{--                                                    <div class="col-sm-5">--}}
                                        {{--                                                        <div class="form-check">--}}
                                        {{--                                                            <label class="form-check-label">--}}
                                        {{--                                                                <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="option2"> Professional </label>--}}
                                        {{--                                                        </div>--}}
                                        {{--                                                    </div>--}}
                                        {{--                                                </div>--}}
                                        {{--                                            </div>--}}
                                        {{--                                        </div>--}}

                                        {{--                                        <p class="card-description"> Address </p>--}}
                                        {{--                                        <div class="row">--}}
                                        {{--                                            <div class="col-md-6">--}}
                                        {{--                                                <div class="form-group row">--}}
                                        {{--                                                    <label class="col-sm-3 col-form-label">Address 1</label>--}}
                                        {{--                                                    <div class="col-sm-9">--}}
                                        {{--                                                        <input type="text" class="form-control" />--}}
                                        {{--                                                    </div>--}}
                                        {{--                                                </div>--}}
                                        {{--                                            </div>--}}
                                        {{--                                            <div class="col-md-6">--}}
                                        {{--                                                <div class="form-group row">--}}
                                        {{--                                                    <label class="col-sm-3 col-form-label">State</label>--}}
                                        {{--                                                    <div class="col-sm-9">--}}
                                        {{--                                                        <input type="text" class="form-control" />--}}
                                        {{--                                                    </div>--}}
                                        {{--                                                </div>--}}
                                        {{--                                            </div>--}}
                                        {{--                                        </div>--}}
                                        {{--                                        <div class="row">--}}
                                        {{--                                            <div class="col-md-6">--}}
                                        {{--                                                <div class="form-group row">--}}
                                        {{--                                                    <label class="col-sm-3 col-form-label">Address 2</label>--}}
                                        {{--                                                    <div class="col-sm-9">--}}
                                        {{--                                                        <input type="text" class="form-control" />--}}
                                        {{--                                                    </div>--}}
                                        {{--                                                </div>--}}
                                        {{--                                            </div>--}}
                                        {{--                                            <div class="col-md-6">--}}
                                        {{--                                                <div class="form-group row">--}}
                                        {{--                                                    <label class="col-sm-3 col-form-label">Postcode</label>--}}
                                        {{--                                                    <div class="col-sm-9">--}}
                                        {{--                                                        <input type="text" class="form-control" />--}}
                                        {{--                                                    </div>--}}
                                        {{--                                                </div>--}}
                                        {{--                                            </div>--}}
                                        {{--                                        </div>--}}
                                        {{--                                        <div class="row">--}}
                                        {{--                                            <div class="col-md-6">--}}
                                        {{--                                                <div class="form-group row">--}}
                                        {{--                                                    <label class="col-sm-3 col-form-label">City</label>--}}
                                        {{--                                                    <div class="col-sm-9">--}}
                                        {{--                                                        <input type="text" class="form-control" />--}}
                                        {{--                                                    </div>--}}
                                        {{--                                                </div>--}}
                                        {{--                                            </div>--}}
                                        {{--                                            <div class="col-md-6">--}}
                                        {{--                                                <div class="form-group row">--}}
                                        {{--                                                    <label class="col-sm-3 col-form-label">Country</label>--}}
                                        {{--                                                    <div class="col-sm-9">--}}
                                        {{--                                                        <select class="form-control">--}}
                                        {{--                                                            <option>America</option>--}}
                                        {{--                                                            <option>Italy</option>--}}
                                        {{--                                                            <option>Russia</option>--}}
                                        {{--                                                            <option>Britain</option>--}}
                                        {{--                                                        </select>--}}
                                        {{--                                                    </div>--}}
                                        {{--                                                </div>--}}
                                        {{--                                            </div>--}}
                                        {{--                                        </div>--}}
                                    </form>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <x-dashboard.footer/>

            </div>

        </div>

    </div>
@endsection
