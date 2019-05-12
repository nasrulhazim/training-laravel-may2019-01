@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row bg-white">
			<div class="col p-5">
				<h3>User Details</h3>
				<div class="float-right pb-3">
					<a href="{{ route('profiles.edit', $profile) }}" class="btn btn-success">
						Edit
					</a>
				</div>
				<table class="table">
					<tr>
						<th>Name</th>
						<td>{{ $profile->user->name }}</td>
					</tr>
					<tr>
						<th>E-mail</th>
						<td>{{ $profile->user->email }}</td>
					</tr>
					<tr>
						<th>Gender</th>
						<td>{{ $profile->gender }}</td>
					</tr>
					<tr>
						<th>DOB</th>
						<td>{{ $profile->dob }}</td>
					</tr>
					<tr>
						<th>Race</th>
						<td>{{ $profile->race }}</td>
					</tr>
					<tr>
						<th>Religion</th>
						<td>{{ $profile->religion }}</td>
					</tr>
				</table>
				<a href="{{ route('profiles.index') }}" class="btn btn-default">
					Back
				</a>
			</div>
		</div>
	</div>
@endsection