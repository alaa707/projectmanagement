@extends('layouts.app')

@section('content')
@extends('layouts.searchuser')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Sittings</div>

                <div class="card-body">
                    

<form action="{{route('setting.update')}}" method="POST">
                        {{ csrf_field()}}
    
    
 <select>
  <option name="status" value="open">Open</option>
  <option name="status" value="close">close</option>
  
</select> 
    
    
<div class="form-group">
<label for="name">Sitename</label>
<input type="text" class="form-control" name="name"  placeholder="Enter Sitename">
</div>
                        
 <br>
 <br>
                        
<label for="email">Enter the Email</label>
<br>
<input name="email" placeholder="Enter Email">
    
<br>
<br>
<textarea name="description" placeholder="Enter description">
        </textarea> 
<br>
<br>
                        
<textarea name="keywords" placeholder="Enter keywords">
</textarea> 
    <br>
<br>           


    

        <button type="submit" class="btn btn-primary">Update</button>
    
    
</form>      
</div>
</div>
</div>
</div>
</div>



















@endsection