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
                                    <h4 class="card-title">MBBS FINAL PROF (Conv)</h4>
                                    <form action="/exams/mbbs/mbbs-final-prof-conv" method="post">
                                        @csrf
                                        <div class="col-md-8">
                                            <div class="form-group row d-flex justify-content-between">
                                                <label class="col-sm-3 col-form-label">Enrollment Number</label>
                                                <div class="col-sm-5">
                                                    <input type="text" name="enrollment" tabindex="1" autofocus class="form-control" />
                                                </div>
                                                <div class="ms-auto col-sm-3 my-5 d-sm-flex  justify-content-sm-center">
                                                    <img height="128px" src="{{ isset($data) ? asset("/assets/images/std/$data->pic_path") : "" }}" alt="{{ isset($data) ? "" : "Not Found 404" }}">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <form class="form-sample">
                                        @csrf
                                        {{-- <p class="card-description"> Personal info </p>--}}

                                        <div class="row mt-5">
                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Enrollment Number</label>
                                                    <div class="col-sm-9">

                                                        <input type="text" name="enrollment" class="form-control" value="{{ isset($data) ? $data->rno : "" }}"/>

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

                                            <form action="">

                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Full Name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" value="{{ isset($data) ? $data->name : "" }}" />
                                                    </div>
                                                </div>
                                            </div>
                                            </form>

                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Father Name</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control" value="{{ isset($data) ? $data->fatherName : "" }}" />
                                                    </div>
                                                </div>
                                            </div>




                                        </div>

                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">CNIC</label>
                                                    <div class="col-sm-9">

                                                        <input type="text" class="form-control"  value="{{ isset($data)? $data->cnic : "" }}"/>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Address</label>
                                                    <div class="col-sm-9">
                                                        <input type="text" class="form-control"  value="{{ isset($data) ? $data->address : "" }}"/>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>

                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-form-label">Date of Birth</label>
                                                    <div class="col-sm-9">
                                                        <input class="form-control" type="text" name="Date of Birth" id="" value="{{ isset($data) ? date('d-m-Y', strtotime($data->dob)) : "" }}">
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
                                            <div class="col-md-12 col-sm-12">
                                                <div class="form-group d-md-flex gap-3">
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
