    @extends('layouts.default-login')
    @section('content')
    <h3>Add Maid</h3>
    <br>
	<form action="/agent/view-maids/add/store" method="post" enctype="multipart/form-data">
		{{ csrf_field() }}
		<table border="0">
			<tr>
				<th>id</th>
				<td>: <input type="text" name="id" required></td>
			</tr>
				<th>name</th>
				<td>: <input type="text" name="name" required></td>
			</tr>
				<th>age</th>
				<td>: <input type="number" name="age" required></td>
			</tr>
				<th>salary</th>
				<td>: <input type="number" name="salary" required></td>
			</tr>
				<th>married</th>
				<td>: <input type="checkbox" name="married" value="1"></td>
			</tr>				
				<th>settled</th>
				<td>: <input type="checkbox" name="settled" value="1"></td>
			</tr>
				<th>religion</th>
				<td>: <input type="string" name="religion" required></td>
			</tr>
				<th>experienced years</th>
				<td>: <input type="number" name="exp_years" required></td>
			</tr>
				<th>description</th>	
				<td>: <input type="text" name="description" required></td>
			</tr>
			</tr>
				<th>profile picture</th>	
				<td>: <input type="file" name="file"></td>
			</tr>
				<th>abilities</th>
				<td>: <input type="text" name="abilities"></td>		
			</tr>
				<th> </th>
				<td>*Seperate each ability with coma (,)</td>
		</table>
		<button type="submit">Submit</button>
	</form>

    @stop