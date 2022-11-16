@extends('layouts.admin')


@section('content')

        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Bill Status -{{ $bill->status }}</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="form-group mb-2">
                            <select class="form-control form-control-sm">                   
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>

                    <img src="{{ asset('storage/' . $bill->photo) }}" class="img-thumbnail" alt="bill">
                    </div>
                
                    
                </div>
            </div>
        </div>
@endsection
