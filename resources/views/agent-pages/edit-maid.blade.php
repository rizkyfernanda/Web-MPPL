    @extends('layouts.default-login')
    @section('content')
    <br>
    <h3>Edit Maid</h3>
    <br>

    @foreach($maids as $maid)
    <a href="/agent/view-maids/edit/{{ $maid->maid_id }}/delete">Delete maid</a>
    <br>

	<form action="/agent/view-maids/edit/update" method="post">
		{{ csrf_field() }}
		<table border="0">
			<tr>
				<th>id</th>
				<td>: <input type="text" name="id" value="{{ $maid->maid_id }}"></td>
			</tr>
				<th>name</th>
				<td>: <input type="text" name="name" value="{{ $maid->name }}"></td>
			</tr>
				<th>age</th>
				<td>: <input type="number" name="age" value="{{ $maid->age }}"></td>
			</tr>
				<th>salary</th>
				<td>: <input type="number" name="salary" value="{{ $maid->salary }}"></td>
			</tr>
				<th>married</th>
				<td>: <input type="checkbox" name="married" value="{{ $maid->married }}"></td>
			</tr>				
				<th>settled</th>
				<td>: <input type="checkbox" name="settled" value="{{ $maid->settled }}"></td>
			</tr>
				<th>religion</th>
				<td>: <input type="string" name="religion" value="{{ $maid->religion }}"></td>
			</tr>
				<th>experienced years</th>
				<td>: <input type="number" name="exp_years" value="{{ $maid->exp_years }}"></td>
			</tr>
				<th>description</th>	
				<td>: <input type="text" name="description" value="{{ $maid->description }}"></td>
			</tr>
		</table>
		<button type="submit">Update</button>
	</form>
	@endforeach
    @stop