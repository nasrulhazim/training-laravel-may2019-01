@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row bg-white">
			<div class="col p-5">
				<h3 class="pb-4">Users 
					<a href="{{ route('users.create') }}" 
						class="float-right btn btn-success">
						{{ __('Create New User') }}
					</a>
				</h3>
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
										{{ __('Show') }}
									</a>
									<a href="{{ route('users.edit', $user) }}" class="btn btn-success">
										{{ __('Edit') }}
									</a>
									<div class="btn btn-danger" onclick="
										if(confirm('Are you sure want to delete this record?')) {
											document.getElementById('user-{{ $user->id }}').submit();
										}
									">
										<form id="user-{{ $user->id }}" 
											action="{{ route('users.destroy', $user) }}" method="POST">
											@csrf @method('DELETE')
										</form>
										{{ __('Delete') }}
									</div>
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