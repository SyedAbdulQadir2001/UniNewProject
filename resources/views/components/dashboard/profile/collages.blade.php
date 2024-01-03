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

                        <div class="col-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">College Profile</h4>
                                    <p class="card-description"></p>
                                    <form action="/profile" method="POST" class="forms-sample">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputName1">Title</label>
                                            <input type="text" class="form-control" id="exampleInputName1" name="title" value="{{ $data->name }}" placeholder="Title">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputName1">Contact No</label>
                                            <input type="text" class="form-control" id="exampleInputName1" name="contact" value="{{ $data->Contact }}" placeholder="Contact No">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputName1">Contact Person</label>
                                            <input type="text" class="form-control" id="exampleInputName1" name="contact_person" value="{{ $data->Contact_Person }}" placeholder="Contact Person">
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleInputEmail3">Email address</label>
                                            <input type="email" class="form-control" id="exampleInputEmail3" name="email" value="{{ $data->Email }}" placeholder="Email">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputName1">Address</label>
                                            <input type="text" class="form-control" id="exampleInputName1" name="address" value="{{ $data->Address }}" placeholder="Address">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputName1">Principal</label>
                                            <input type="text" class="form-control" id="exampleInputName1" name="principal" value="{{ $data->Principal }}" placeholder="Principal">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputName1">Principal Contact No</label>
                                            <input type="text" class="form-control" id="exampleInputName1" name="principal_contact" value="{{ $data->Principal_Contact }}" placeholder="Principal Contact No">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleSelectGender">Type</label>
                                            <select class="form-control" id="exampleSelectGender">
                                                <option value="0">Co-edu</option>
                                                <option value="1">Male</option>
                                                <option value="2">female</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Upload Picture</label>
{{--                                            <input type="file" name="img[]" class="file-upload-default">--}}
                                            <div class="input-group col-xs-12">
                                                {{--                                                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">--}}
                                                <input class="form-control" value="" type="file" name="profile_img" id="">
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                                        <button class="btn btn-light">Cancel</button>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:../../partials/_footer.html -->
                <x-dashboard.footer/>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
@endsection
