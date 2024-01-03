@extends("layouts.dashboard-layout")

@section("title", "users")

@section("content")
    <div class="container-scroller">

        <x-dashboard.navbar/>


        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

            <x-dashboard.sidebar/>

            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header ">
                        <h3 class="page-title"> Add User </h3>
                        <div class="d-flex">
                            <a class="btn btn-danger " href="#">Delete User</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <form class="forms-sample" action="{{ route("users.update",$users->id) }}" method="post">
                                        @method("PUT")
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email" value="{{ $users->email }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Role</label>
                                            <select class="form-control py-3" name="role" id="">
                                                <option selected>---- Select Role ----</option>
                                                <option value="0" {{ ($users->role == 0) ? "Selected" : "" }}>Student</option>
                                                <option value="1" {{ ($users->role == 1) ? "Selected" : "" }}>College</option>
                                                <option value="9999" {{ ($users->role == 9999) ? "Selected" : "" }}>Administrator</option>
                                            </select>
                                        </div>

                                        <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                                        <a class="btn btn-light" href="{{ route("users.index") }}">Cancel</a>

                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- content-wrapper ends -->
                <x-dashboard.footer/>
            </div>
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
@endsection
