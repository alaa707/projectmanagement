

        <form action="/search" method="POST" role="search">
			{{ csrf_field() }}
			<div class="input-group">
				<input type="text" class="form-control" name="q"
					placeholder="Search users"> <span class="input-group-btn">
					<button type="submit" class="btn btn-default">
						<span class="glyphicon glyphicon-search"></span>
					</button>
				</span>
			</div>
		</form>
        @if(isset($details))
        <div class="container">
        <p>the Search results for your Query <b> {{$query}}</b> are: </p>

        <h1>User Details:</h1>
            <table>
        <thead>
        <tr>
            <th>Name</th>
             <th>Email</th>

            </tr>
        </thead>
        <tbody>
        @foreach($details as $user)
            <tr>
            <td>{{ $user->name}}</td>
            <td>{{ $user->email}}</td>

            </tr>
        @endforeach
        </tbody>
        
        </table>
        </div>
        @elseif(isset($message))

<p>{{ $message }}</p>

        @endif
     