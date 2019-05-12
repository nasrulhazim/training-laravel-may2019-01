@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row bg-white">
			<div class="col p-5">
				<h3 class="pb-4">{{ __('Profiles') }} 
					<a href="{{ route('profiles.create') }}" 
						class="float-right btn btn-success">
						{{ __('Create New Profile') }}
					</a>
				</h3>
				{{-- 
					TODO:
					Statistic of the profile - count for gender, race, religion 
				--}}
				<div class="float-right">
					{{ $profiles->links() }}
				</div>
				<table class="table">
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>Gender</th>
						<th>DOB</th>
						<th>Race</th>
						<th>Religion</th>
						<th>Actions</th>
					</tr>
					@foreach($profiles as $profile)
						<tr>
							<td>{{ $profile->user->name }}</td>
							<td>{{ $profile->user->email }}</td>
							<td>{{ $profile->gender }}</td>
							<td>{{ $profile->dob }}</td>
							<td>{{ $profile->race }}</td>
							<td>{{ $profile->religion }}</td>
							<td>
								<div class="btn-group">
									<a href="{{ route('profiles.show', $profile) }}" class="btn btn-primary">
										{{ __('Show') }}
									</a>
									<a href="{{ route('profiles.edit', $profile) }}" class="btn btn-success">
										{{ __('Edit') }}
									</a>
									<div class="btn btn-danger" onclick="
										if(confirm('Are you sure want to delete this record?')) {
											document.getElementById('user-{{ $profile->id }}').submit();
										}
									">
										<form id="user-{{ $profile->id }}" 
											action="{{ route('profiles.destroy', $profile) }}" method="POST">
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
					{{ $profiles->links() }}
				</div>
			</div>
		</div>
	</div>
@endsection