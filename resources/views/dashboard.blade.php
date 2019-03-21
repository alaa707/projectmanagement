@extends('layouts.app')

@section('content')
@extends('layouts.searchcat')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


 


                    <div class="container">
                            <div class="row">
                              <div class="col-sm">
                                    <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                                            <div class="card-header">Categories</div>
                                            <div class="card-body">
                                              <h5 class="card-title">{{$cat_count}}</h5>
                                             </div>
                                          </div>
                              </div>
                              <div class="col-sm">
                                    <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                                            <div class="card-header">News</div>
                                            <div class="card-body">
                                              <h5 class="card-title">{{$new_count}}</h5>
                                             </div>
                                          </div>
                              </div>
                             
                            </div>
                          </div>
                   
                    





                         


                   
                        
                       
                         
                         
                        
                         
                         












                </div>
            </div>
        </div>
    </div>
</div>
@endsection
