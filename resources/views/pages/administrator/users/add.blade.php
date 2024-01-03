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
                    <div class="page-header">
{{--                        <h3 class="page-title"> Add User </h3>--}}
                    </div>
                    <div class="row">
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Add User</h4>


{{--                                    @if ($errors->any())--}}
{{--                                        <div class="alert alert-danger">--}}
{{--                                            <ul>--}}
{{--                                                @foreach ($errors->all() as $error)--}}
{{--                                                    <li>{{ $error }}</li>--}}
{{--                                                @endforeach--}}
{{--                                            </ul>--}}
{{--                                        </div>--}}
{{--                                    @endif--}}


                                    <form class="forms-sample" action="{{ route("users.store") }}" method="post">
                                        @csrf
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <div class="form-group">

                                            <label for="exampleInputEmail1">Email address</label>
                                            <input class="form-control @error('email') border border-danger  @enderror"  type="email" name="email" id="exampleInputEmail1" placeholder="Email" value="{{ old("email") }}">

                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" name="password" class="form-control @error('password') border border-danger @enderror " id="exampleInputPassword1" placeholder="Password">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Role</label>
                                            <select class="form-control py-3 @error('role') border-1 border-danger @enderror" name="role" id="">
                                                <option value="" selected>---- Select Role ----</option>
                                                <option value="0">Student</option>
                                                <option value="1">College</option>
                                                <option value="9999">Administrator</option>
                                            </select>
                                        </div>

                                        <button type="submit" class="btn btn-gradient-primary me-2">Submit</button>
                                        <button class="btn btn-light">Cancel</button>

                                    </form>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Add College name</h4>



                                    <form class="forms-sample" action="{{ route("users.store") }}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Collage Name</label>
                                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Collage Contact Person</label>
                                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Soo On</label>
                                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>

                                        <div class="form-group">
                                            <label for="">Role</label>
                                            <select class="form-control py-3" name="role" id="">
                                                <option selected>---- Select Role ----</option>
                                                <option value="0">Student</option>
                                                <option value="1">College</option>
                                                <option value="9999">Administrator</option>
                                            </select>
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
                <x-dashboard.footer/>
            </div>
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
@endsection
