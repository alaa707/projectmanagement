@extends('layouts.app')

@section('content')

@extends('layouts.searchnews')



<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.css
">
        </script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New</div>

                <div class="card-body">
                    
                    
                    
                    

                    @if(count($errors)>0)
                    <ul class="navbar-nav mr-auto">
                            @foreach ($errors->all() as $error)
                            <li class="nav-item active">
                                     {{$error}}
                                  </li>
                            @endforeach
                            
                          </ul>
                          @endif

                    

<form action="{{route('new.store')}}" method="POST"  >
                        {{ csrf_field()}}
                        
    <div class="form-group">
<label for="exampleFormControlSelect1">Category</label>
     <select class="form-control" name="cat_id" id="cat_id">
         @foreach ($categories as $category)
     <option value="{{$category->id}}" >{{$category->name}}</option>
             @endforeach
                                       
                                     
       </select>
         </div>
                        
                        
                        <div class="form-group">
                          <label for="subject">subject</label>
                          <input type="text" class="form-control" name="subject"  placeholder="Enter subject">
                         </div>
                        
 <br>
 <br>
                        
           <label for="subject">Enter the Content Here</label>
     <br>
<textarea name="content" placeholder="Enter content">
        </textarea>
    <br>
<br>
                        
<!--
     <div class="row" > 
        <div class="col-md-12">  
    <div class="form-group">
    <label for="image">Photo</label>
 <input type="file" class="form-control-file" name="image">
    </div>
         </div>                
                        
    </div> 
-->
    
    <div class="row">
    <div class="col-md-12" >
<lable for="image"  class="dropzone" id="addImage" action="{{route('new.store')}}">Dropzone
        </lable>
        <input type="hidden" name="image">
        </div>
    
    </div>
    
    
    
    
    
    

    
        <button type="submit" class="btn btn-primary">Save</button>
                      </form> 
                    
                    
<!--                    url('image/do-upload')-->
                    
<!--
                     <form action="{{route('new.store')}}" class="dropzone" id="addImage">
        
        
        </form>
-->
                    
    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
