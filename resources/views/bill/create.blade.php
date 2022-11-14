@extends('layouts.admin')


@section('content')


      

            <div class="row match-height">
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Upload  Invoice</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                    <form action="{{ route('updatebill') }}" method="POST" enctype="multipart/form-data" class="form form-vertical">
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="first-name-vertical">Bill Number</label>
                                                            @csrf
                                                            @method('PUT')
                                                            <input  type="text" id="first-name-vertical" class="form-control"  name="bilnum" required >                                                       
                                                        </div>

                                                   
                                                        <div class="form-group">                                                           
                                                            <input type="file" name="photo" accept="image/*" capture="environment" required>                                                       
                                                        </div>
                                                    </div>

                                                  
                                                    <div class="col-12 d-flex justify-content-end">
                                                        <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                 

        
    </div>
@endsection
