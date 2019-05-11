@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="row bg-white">
			<div class="col p-5">
				<h3>{{ __('User Details') }}</h3>
				<form action="{{ route('users.store') }}" method="POST">
					@csrf 
					<table class="table">
						<tr>
							<th>{{ __('Name') }}</th>
							<td>
								<input class="form-control @error('name') border border-danger @enderror" 
									type="text" name="name" 
									value="{{ old('name') }}">

								@error('name')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</td>
						</tr>
						<tr>
							<th>{{ __('Email') }}</th>
							<td>
								<input class="form-control @error('email') border border-danger @enderror" 
									type="text" name="email" 
									value="{{ old('email') }}">

								@error('email')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</td>
						</tr>
						<tr>
							<th>{{ __('Password') }}</th>
							<td>
								<input class="form-control @error('password') border border-danger @enderror" 
									type="password" name="password" >
									
								@error('password')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</td>
						</tr>
						<tr>
							<th>{{ __('Confirm Password') }}</th>
							<td>
								<input class="form-control" 
									type="password" name="password_confirmation">
							</td>
						</tr>
					</table>
					<div class="float-right">
						<a href="{{ route('users.index') }}" class="btn btn-default">
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