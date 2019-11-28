    @extends('layouts.default')
    @section('content')
        <br><br>
        <h3>All Users</h3>
        <br><br>
		<table border="1">
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Type</th>
			</tr>
			@foreach($users as $user)
			<tr>
				<td>{{ $user->name }}</td>
				<td>{{ $user->email }}</td>
				<td>{{ $user->type }}</td>
			</tr>
			@endforeach
		</table>
    @stop