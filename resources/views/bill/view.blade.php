@extends('layouts.admin')


@section('content')

<div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Bill Status -{{ $bill->status }}</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                       

                                       <img src="{{ asset('storage/' . $bill->photo) }}" class="img-thumbnail" alt="Cinque Terre">
                                    </div>
                                   
                                    
                                </div>
                            </div>
                        </div>
@endsection
