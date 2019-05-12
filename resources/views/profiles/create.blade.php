@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row bg-white">
			<div class="col p-5">
				<h3>{{ __('User Details') }}</h3>
				<form action="{{ route('profiles.store') }}" method="POST">
					@csrf 
					<table class="table">
						<tr>
							<th>{{ __('User') }}</th>
							<td>
								<select class="form-control  @error('user_id') border border-danger @enderror" name="user_id">
									@foreach ($users as $user)
										<option value="{{ $user->id }}">
											{{ $user->name }}
										</option>
									@endforeach
								</select>
								@error('user_id')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</td>
						</tr>
						<tr>
							<th>{{ __('Date of Birth') }}</th>
							<td>
								<input type="date" name="dob" class="form-control  @error('user_id') border border-danger @enderror">
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
									<option value="M">Male</option>
									<option value="F">Female</option>
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
									<option value="Malay">Malay</option>
									<option value="Indian">Indian</option>
									<option value="Chinese">Chinese</option>
									<option value="Others">Others</option>
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
									<option value="Islam">Islam</option>
									<option value="Christian">Christian</option>
									<option value="Hindu">Hindu</option>
									<option value="Others">Others</option>
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
						<a href="{{ route('profiles.index') }}" class="btn btn-default">
							{{ __('Back') }}
						</a>
						<button type="submit" class="btn btn-primary">
                            {{ __('Create') }}
                        </button>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection