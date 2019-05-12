@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row bg-white">
			<div class="col p-5">
				<h3>{{ __('User Details') }}</h3>
				<form action="{{ route('profiles.update', $profile) }}" method="POST">
					@csrf 
					@method('PUT')
					<table class="table">
						<tr>
							<th>{{ __('User') }}</th>
							<td>
								{{ $profile->user->name }}
								<input type="hidden" name="user_id" value="{{ $profile->user->id }}">
							</td>
						</tr>
						<tr>
							<th>{{ __('Date of Birth') }}</th>
							<td>
								<input type="date" name="dob" class="form-control  @error('user_id') border border-danger @enderror" value="{{ $profile->dob }}">
								@error('dob')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</td>
						</tr>
						<tr>
							<th>{{ __('Gender') }}</th>
							<td>
								<select class="form-control  @error('gender') border border-danger @enderror" name="gender">
									<option value="M" {{ $profile->gender == "M" ? "selected" : "" }}>Male</option>
									<option value="F" {{ $profile->gender == "F" ? "selected" : "" }}>Female</option>
								</select>
								@error('gender')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</td>
						</tr>
						<tr>
							<th>{{ __('Race') }}</th>
							<td>
								<select class="form-control  @error('race') border border-danger @enderror" name="race">
									<option value="Malay" {{ $profile->race == "Malay" ? "selected" : "" }}>Malay</option>
									<option value="Indian" {{ $profile->race == "Indian" ? "selected" : "" }}>Indian</option>
									<option value="Chinese" {{ $profile->race == "Chinese" ? "selected" : "" }}>Chinese</option>
									<option value="Others" {{ $profile->race == "Others" ? "selected" : "" }}>Others</option>
								</select>
								@error('race')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</td>
						</tr>

						<tr>
							<th>{{ __('Religion') }}</th>
							<td>
								<select class="form-control  @error('religion') border border-danger @enderror" name="religion">
									<option value="Islam" {{ $profile->religion == "Islam" ? "selected" : "" }}>Islam</option>
									<option value="Christian" {{ $profile->religion == "Christian" ? "selected" : "" }}>Christian</option>
									<option value="Hindu" {{ $profile->religion == "Hindu" ? "selected" : "" }}>Hindu</option>
									<option value="Others" {{ $profile->religion == "Others" ? "selected" : "" }}>Others</option>
								</select>
								@error('religion')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</td>
						</tr>
					</table>
					<div class="float-right">
						<a href="{{ route('profiles.show', $profile) }}" class="btn btn-default">
							{{ __('Back') }}
						</a>
						<button type="submit" class="btn btn-primary">
                            {{ __('Update') }}
                        </button>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection