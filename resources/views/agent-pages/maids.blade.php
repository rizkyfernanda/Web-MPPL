    @extends('layouts.default-login')
    @section('content')
        <br>
        <h3>All Maids</h3>
        <a href="/agent/view-maids/add"> + Add Maid</a>
        <br><br>
				
		<p>Search for maids :</p>
		<form action="/agent/view-maids" method="GET">
			<table border="0">
				</tr>
					<th>Name</th>
					<td> : <input type="text" name="name" placeholder="Name .." value="{{ $request['name'] }}"> </td>
				</tr>
					<th>Experience</th>
					<td> : 
						<input type="number" name="min_exp_years" placeholder="Minimum experience .." value="{{ $request['min_exp_years'] }}">
						up to <input type="number" name="max_exp_years" placeholder="Maximum experience .." value="{{ $request['max_exp_years'] }}">
					</td>
				</tr>
					<th>Age</th>
					<td> : 
						<input type="number" name="min_age" placeholder="Minimum age .." value="{{ $request['min_age'] }}">
						up to <input type="number" name="max_age" placeholder="Maximum age .." value="{{ $request['max_age'] }}">
					</td>
				</tr>
					<th>Salary</th>
					<td> : 
						<input type="number" name="min_salary" placeholder="Minimum salary .." value="{{ $request['min_salary'] }}">
						up to <input type="number" name="max_salary" placeholder="Maximum salary .." value="{{ $request['max_salary'] }}">
					</td>
				</tr>
					<th>Married</th>
						<td>: 
							<input type="radio" name="married" value="1" {{ ($request->married == '0') ? 'checked' : '' }}> Yes
							<input type="radio" name="married" value="0" {{ ($request->married == '1') ? 'checked' : '' }}> No
							<input type="radio" name="married" value="-1" {{ ($request->married == '-1') ? 'checked' : '' }}> Not Important
						</td>
				</tr>
					<th>Settled</th>
						<td>: 
							<input type="radio" name="settled" value="1" {{ ($request->settled == '0') ? 'checked' : '' }}> Yes
							<input type="radio" name="settled" value="0" {{ ($request->settled == '1') ? 'checked' : '' }}> No
							<input type="radio" name="settled" value="-1" {{ ($request->settled == '-1') ? 'checked' : '' }}> Not Important
						</td>
				</tr>
					<th>abilities</th>
					<td>: <input type="text" name="abilities" value="{{ $request['abilities'] }}"></td>		
				</tr>
					<th> </th>
					<td>*Seperate each ability with coma (,)</td>
				</tr>
					<th>preferences</th>
					<td>: <input type="text" name="preferences" value="{{ $request['preferences'] }}"></td>		
				</tr>
					<th> </th>
					<td>*Seperate each preference with coma (,)</td>
				
				</table>
			<input type="submit" value="SEARCH">
		</form>
		<br />
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
				<th>abilities</th>
				<th>preferences</th>
				<th>description</th>
				<th>picture</th>
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
				<td>{{ $maid->abilities }}</td>
				<td>{{ $maid->preferences }}</td>
				<td>{{ $maid->description }}</td>
				<td><a href="{{ url('/pictures/'.$maid->picture) }}">
					{{ $maid->picture }}</a></td>
				<td><a href="/agent/view-maids/edit/{{ $maid->maid_id }}">Edit</a></td>
			</tr>
			@endforeach
		</table>
    @stop