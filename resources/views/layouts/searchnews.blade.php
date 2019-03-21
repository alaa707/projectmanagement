

        <form action="/searchnews" method="POST" role="searchnews">
			{{ csrf_field() }}
			<div class="input-group">
				<input type="text" class="form-control" name="q"
					placeholder="Search News"> <span class="input-group-btn">
					<button type="submit" class="btn btn-default">
						<span class="glyphicon glyphicon-search"></span>
					</button>
				</span>
			</div>
		</form>
        @if(isset($details))
        <div class="container">
        <p>the Search results for your Query <b> {{$query}}</b> are: </p>

        <h1>News Details:</h1>
            <table>
        <thead>
        <tr>
            <th>subject</th>
             <th>content</th>
         <th>image</th>
  
            
            
            </tr>
        </thead>
        <tbody>
        @foreach($details as $srchnew)
            <tr>
      <th scope="row">{{$srchnew->subject}}</th>
     <th scope="row">{{$srchnew->content}}</th>
    <th scope="row">{{$srchnew->image}}</th>

<td> 
<a class="" href="{{route('new.edit',['id' =>$srchnew->id ])}}">
    <i class="fas fa-edit">Edit</i>
     </a>
</td>
<td> 
            
    <a class="" href="{{route('new.delete',['id' =>$srchnew->id ])}}">
             <i class="far fa-trash-alt">Delete</i>
</a>
</td> 
    
              

              
    </tr>
            
            
            
<!--
            <tr>
            <td>{{ $srchnew->subject}}</td>
            <td>{{ $srchnew->content}}</td>
            <td>{{ $srchnew->image}}</td>
            </tr>
-->
        @endforeach
        </tbody>
        
        </table>
        </div>
        @elseif(isset($message))

<p>{{ $message }}</p>

        @endif
     