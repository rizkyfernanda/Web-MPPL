    @extends('layouts.default-login')
    @section('content')
        <br>
        <h3>All Maids</h3>
        <a href="/agent/view-maids/add"> + Add Maid</a>
        <br><br>
		<table border="1">
			<tr>
				<th>id</th>
				<th>name</th>
				<th>age</th>
				<th>salary</th>
				<th>married</th>				
				<th>settled</th>
				<th>religion</th>
				<th>experienced years</th>
				<th>description</th>
				<th>options</th>		
			</tr>
			@foreach($maids as $maid)
			<tr>
				<td>{{ $maid->maid_id }}</td>
				<td>{{ $maid->name }}</td>
				<td>{{ $maid->age }}</td>
				<td>{{ $maid->salary }}</td>
				<td>{{ $maid->married }}</td>
				<td>{{ $maid->settled }}</td>
				<td>{{ $maid->religion }}</td>
				<td>{{ $maid->exp_years }}</td>
				<td>{{ $maid->description }}</td>
				<td>
				<a href="/agent/view-maids/edit/{{ $maid->maid_id }}">Edit</a>
			</td>
			</tr>
			@endforeach
		</table>
    @stop