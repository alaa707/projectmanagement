@extends('layouts.app')

@section('content')

@extends('layouts.searchnews')




<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit news  {{$news->subject}}</div>

                <div class="card-body">
 
                  

<form action="{{route('new.update' , ['id' => $news->id ])}}" method="POST"  >
                        {{ csrf_field()}}
                        <div class="form-group">
                          <label for="subject">New news</label>
                          <input type="text" class="form-control" name="subject"  value="{{$news->subject}}">
                         </div>
              <label for="content">New content </label>  
    
    <textarea name="content" class="form-control" value="{{$news->content}}"></textarea>
                        
                        
                         
                         
                        <button type="submit" class="btn btn-primary">Update</button>
                      </form>      
                    







                </div>
            </div>
        </div>
    </div>
</div>
@endsection
