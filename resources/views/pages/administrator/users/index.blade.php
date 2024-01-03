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


                        <h3 class="page-title"> Users </h3>
                        <a class="btn btn-behance" href="{{ route("users.create") }}">Add User</a>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
{{--                                    <h4 class="card-title">Users</h4>--}}
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Email</th>
                                            <th>Role</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($users as $user)
                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>
                                                    @if($user->role == 0)
                                                        Student
                                                    @elseif($user->role == 1)
                                                        College
                                                    @elseif($user->role == 9999)
                                                        Administrator
                                                    @endif
                                                </td>

                                                <td><a class="btn btn-success" href="{{ route("users.edit",$user->id) }}">Edit</a></td>
                                            </tr>
                                        @endforeach


                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <!-- content-wrapper ends -->

                <x-dashboard.footer/>
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
@endsection
