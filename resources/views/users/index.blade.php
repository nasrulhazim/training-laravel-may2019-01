@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row bg-white">
			<div class="col p-5">
				<h3>Users</h3>
				<div class="float-right">
					{{ $users->links() }}
				</div>
				<table class="table">
					<tr>
						<th>Name</th>
						<th>E-mail</th>
						<th>Actions</th>
					</tr>
					@foreach($users as $user)
						<tr>
							<td>{{ $user->name }}</td>
							<td>{{ $user->email }}</td>
							<td>
								<div class="btn-group">
									<a href="{{ route('users.show', $user) }}" class="btn btn-primary">
										Show
									</a>
									<a href="{{ route('users.edit', $user) }}" class="btn btn-success">
										Edit
									</a>
									<div class="btn btn-danger">
										Delete
									</a>
								</div>
							</td>
						</tr>
					@endforeach
				</table>
				<div class="float-right">
					{{ $users->links() }}
				</div>
			</div>
		</div>
	</div>
@endsection