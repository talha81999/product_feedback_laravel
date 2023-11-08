@extends('authentication.layouts.main')
@section('main-container')
<!-- [ auth-signup ] start -->
<div class="auth-wrapper">
	<div class="auth-content" style="width: 50%;">
		<div class="card">
			<div class="row align-items-center text-center">
				<div class="col-md-12">
                    <form action="{{url('/register-user')}}" method="post">
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
					<div class="card-body">
						<h4 class="mb-3 f-w-400">Sign up</h4>
						<div class="row">
                            <div class="col-md-6 input-group  mb-3">
                                <div class="col-md-12 input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="feather icon-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="user_first_name" placeholder="User first name">
                                </div>
                                <div class="col-md-10 m-0 p-0 text-start">
                                    <span class="text-danger m-0 p-0 text-start">
                                        @error('user_first_name')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6 input-group mb-3">
                                <div class="col-md-12 input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="feather icon-user"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="user_last_name" placeholder="User last name">
                                </div>
                                <div class="col-md-10 m-0 p-0 text-start">
                                    <span class="text-danger m-0 p-0 text-start">
                                        @error('user_last_name')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 input-group mb-3">
                                <div class="col-md-12 input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="feather icon-mail"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="user_email" placeholder="User email">
                                </div>
                                <div class="col-md-10 m-0 p-0 text-start">
                                    <span class="text-danger m-0 p-0 text-start">
                                        @error('user_email')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6 input-group mb-3">
                                <div class="col-md-12 input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="feather icon-lock"></i></span>
                                    </div>
                                    <input type="password" class="form-control" name="user_password" placeholder="User password">
                                </div>
                                <div class="col-md-10 m-0 p-0 text-start">
                                    <span class="text-danger m-0 p-0 text-start">
                                        @error('user_password')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 input-group mb-3">
                                <div class="col-md-12 input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="feather icon-phone"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="user_phone" placeholder="User phone">
                                </div>
                                <div class="col-md-10 m-0 p-0 text-start">
                                    <span class="text-danger m-0 p-0 text-start">
                                        @error('user_phone')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6 input-group mb-3">
                                <div class="col-md-12 input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="feather icon-user"></i></span>
                                    </div>
                                    <select class="form-control" name="user_gender" id="exampleFormControlSelect1">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div class="col-md-10 m-0 p-0 text-start">
                                    <span class="text-danger m-0 p-0 text-start">
                                        @error('user_gender')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 input-group mb-3">
                                <div class="col-md-12 input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="feather icon-home"></i></span>
                                    </div>
                                    <input type="text" class="form-control" name="user_address" placeholder="User address">
                                </div>
                                <div class="col-md-10 m-0 p-0 text-start">
                                    <span class="text-danger m-0 p-0 text-start">
                                        @error('user_address')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                            <div class="col-md-6 input-group mb-3">
                                <div class="col-md-12 input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="feather icon-user"></i></span>
                                    </div>
                                    <input type="date" class="form-control" name="user_dob" placeholder="User D-O-B">
                                </div>
                                <div class="col-md-10 m-0 p-0 text-start">
                                    <span class="text-danger m-0 p-0 text-start">
                                        @error('user_dob')
                                        {{$message}}
                                        @enderror
                                    </span>
                                </div>
                            </div>
                        </div>

						<button class="btn btn-primary btn-block mb-4 mt-4">Sign up</button>
						<p class="mb-2">Already have an account? <a href="{{url('/login')}}" class="f-w-400">Signin</a></p>
					</div>
                    </form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- [ auth-signup ] end -->

@endsection
