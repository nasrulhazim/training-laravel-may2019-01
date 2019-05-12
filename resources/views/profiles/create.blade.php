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
							<th>{{ __('Gender') }}</th>
							<td>
								<select class="form-control  @error('gender') border border-danger @enderror" name="gender">
									<option value="M">Male</option>
									<option value="F">Male</option>
								</select>
								@error('gender')
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