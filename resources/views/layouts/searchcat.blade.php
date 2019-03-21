



<form action="/searchcat" method="POST" role="searchcat">
			{{ csrf_field() }}
			<div class="input-group">
				<input type="text" class="form-control" name="q"
					placeholder="Search Category"> <span class="input-group-btn">
					<button type="submit" class="btn btn-default">
						<span class="glyphicon glyphicon-search"></span>
					</button>
				</span>
			</div>
		</form>
        @if(isset($details))
        <div class="container">
        <p>the Search results for your Query <b> {{$query}}</b> are: </p>

        <h1>category Details:</h1>
            <table>
        <thead>
        <tr>
            <th>Name</th>
             <th>description</th>

            </tr>
        </thead>
        <tbody>
        @foreach($details as $srhcat)
            <tr>
            <td>{{ $srhcat->name}}</td>
            <td>{{ $srhcat->email}}</td>

            </tr>
        @endforeach
        </tbody>
        
        </table>
        </div>
         @elseif(isset($message))

<p>{{ $message }}</p>
        @endif

