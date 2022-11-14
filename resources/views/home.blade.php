@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">


            {{-- @can('view-dashboard') --}}
            <div class="col-12 col-md-3 ">
                <div class="card p-2"> <a href="{{ route('admin.dashboard.index') }}"
                        class="d-flex justify-content-start btn ">
                        <span style="font-size: 20px;color:rgb(214, 92, 62)" class="mr-2"><i
                                class="fas fa-tachometer-alt"></i></span>
                        Dashboard</a>
                </div>
            </div>
            {{-- @endcan --}}




            @role('admin')

            <div class="p-2 col-12 col-md-12 m-1">
                <h5 class="mb-3">Administration</h5>
                <div class="row">

                    <div class="col-12 col-md-3 ">
                        <div class="card p-2"> <a href="{{ route('admin.permissions.index') }}"
                                class="d-flex justify-content-start btn  ">
                                <span style="font-size: 20px;color:rgb(112, 117, 192)" class="mr-2"><i
                                        class="fas fa-list"></i> </span>Manage Permissions
                            </a>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 ">
                        <div class="card p-2">
                            <a href="{{ route('admin.roles.index') }}" class="d-flex justify-content-start btn  ">
                                <span style="font-size: 20px;color:rgb(112, 117, 192)" class="mr-2"><i
                                        class="fas fa-plus"></i> </span>Manage Roles
                            </a>
                        </div>
                    </div>

                    <div class="col-12 col-md-3 ">
                        <div class="card p-2">
                            <a href="{{ route('admin.users.index') }}" class="d-flex justify-content-start btn  ">

                                <span style="font-size: 20px;color:rgb(112, 117, 192)" class="mr-2"><i
                                        class="fas fa-search"></i> </span>Manage Users
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            
            @endrole

           
            <div class="col-12 col-md-3 ">
                <div class="card p-2"> <a href="{{ route('admin.dashboard.index') }}"
                        class="d-flex justify-content-start btn ">
                        <span style="font-size: 20px;color:rgb(214, 92, 62)" class="mr-2"><i
                                class="fas fa-sign-out-alt fa-rotate-180"></i></span>
                        Log out</a>
                </div>
            </div>

       

        </div>

    </div>
@endsection
