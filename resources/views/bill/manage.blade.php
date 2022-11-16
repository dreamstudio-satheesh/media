@extends('layouts.admin')


@section('content')

<div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Bill Status</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <p class="card-text">Check <code>bill</code> bill status 
                                        </p>
                                    </div>
                                    <!-- table bordered -->
                                    <div class="table-responsive">
                                        <table class="table table-bordered mb-0">
                                            <thead>
                                                <tr>
                                                    <th>NUMBER</th>
                                                    <th>STATUS</th>
                                                    <th>ACTION</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($bills as $bill)
                                                <tr>
                                                    <td class="text-bold-500">{{ $bill->bilnum }}</td>
                                                    <td>{{ $bill->status }}</td>                                                   
                                                    <td><button type="submit" class="btn btn-primary me-1 mb-1"  data-bs-toggle="modal" data-bs-target="#primary">Manage</button></td>
                                                </tr>
                                               
                                                @endforeach
                                             
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
@endsection
