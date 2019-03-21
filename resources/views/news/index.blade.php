@extends('layouts.app')

@section('content')
@extends('layouts.searchnews')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">News</div>

                <div class="card-body">
 


    <table class="table table-striped">
    <thead>
     <tr>
     <th scope="col"> Subject </th>
 <th scope="col"> Content </th>
 <th scope="col"> Image </th>

  <th scope="col">Edit</th>
<th scope="col">Delete</th>
                                    
</tr>
</thead>
         <tbody>
        @foreach ($news as $new)
          <tr>
      <th scope="row">{{$new->subject}}</th>
     <th scope="row">{{$new->content}}</th>
    <th scope="row">{{$new->image}}</th>

<td> 
<a class="" href="{{route('new.edit',['id' =>$new->id ])}}">
    <i class="fas fa-edit">Edit</i>
     </a>
</td>
<td> 
            
    <a class="" href="{{route('new.delete',['id' =>$new->id ])}}">
             <i class="far fa-trash-alt">Delete</i>
</a>
</td> 
    
              

              
    </tr>
     @endforeach
                                 
                                  
</tbody>
</table>




                     

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
