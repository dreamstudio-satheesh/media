@extends('layouts.admin')


@section('content')

<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Bill Status -{{ $bill->status }}</h4>
        </div>
        <div class="card-content">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                    <select class="form-control">                   
                        <option {{ ( $bill->status == 'pending') ? 'selected' : '' }}>pending</option>
                        <option {{ ( $bill->status == 'approved') ? 'selected' : '' }}>approved</option>
                        <option {{ ( $bill->status == 'rejected') ? 'selected' : '' }}>rejected</option>
                    </select>
                    </div>
                    <div class="col">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            <img src="{{ asset('storage/' . $bill->photo) }}" class="img-thumbnail" alt="Cinque Terre">
            </div>
        
            
        </div>
    </div>
</div>
@endsection
