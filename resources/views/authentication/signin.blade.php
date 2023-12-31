
@extends('authentication.layouts.main')
@section('main-container')
<!-- [ auth-signin ] start -->
<div class="auth-wrapper">
	<div class="auth-content">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
					<div class="card-body">
                        <form action="{{route('login-user')}}" method="post">
                        @if (Session::has('success'))
                            <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif
                        @if (Session::has('success_message'))
                        <div class="alert alert-success">{{Session::get('success_message')}}</div>
                        @endif
                        @if (Session::has('fail'))
                            <div class="alert alert-danger">{{Session::get('fail')}}</div>
                        @endif
                        @csrf

                        <!-- <h3 class="project-heading mb-3">IKONIC PRODUCT FEEDBACK APP</h3> -->
						<h4 class="mb-3 f-w-400">Signin</h4>
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="feather icon-mail"></i></span>
							</div>
							<input type="email" name="email" value="{{old('email')}}" class="form-control" placeholder="Email address" >
						</div>
                        <div class="text-left">
                        <span class="text-danger ">
                            @error('email')
                            {{$message}}
                            @enderror
                        </span>
                        </div>
						<div class="input-group mt-3 ">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="feather icon-lock"></i></span>
							</div>
							<input type="password" name="password" class="form-control" placeholder="Password" >
						</div>
                        <div class="text-left">
                            <span class="text-danger ">
                                @error('password')
                                {{$message}}
                                @enderror
                            </span>
                            </div>
						<button type="submit" class="btn btn-block btn-primary mb-4 mt-4">Signin</button>
                    </form>
						<p class="mb-2 text-muted">Forgot password? <a href="{{url('/verifyemail')}}" class="f-w-400">Reset</a></p>
						<p class="mb-2 text-muted">Don't have an account? <a href="{{url('/register')}}" class="f-w-400">Signup</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signin ] end -->

@endsection
