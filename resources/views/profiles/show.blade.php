@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row bg-white">
			<div class="col p-5">
				<h3>User Details</h3>
				<div class="float-right pb-3">
					<a href="{{ route('users.edit', $user) }}" class="btn btn-success">
						Edit
					</a>
				</div>
				<table class="table">
					<tr>
						<th>Name</th>
						<td>{{ $user->name }}</td>
					</tr>
					<tr>
						<th>E-mail</th>
						<td>{{ $user->email }}</td>
					</tr>
				</table>
				<a href="{{ route('users.index') }}" class="btn btn-default">
					Back
				</a>
			</div>
		</div>
	</div>
@endsection