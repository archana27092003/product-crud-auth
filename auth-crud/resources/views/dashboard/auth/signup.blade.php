@extends('dashboard.auth.main')

@section('content')
    <div class="d-flex align-items-center justify-content-center my-5">
        <div class="container-fluid">
            <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                <div class="col mx-auto">
                    <div class="card mb-0">
                        <div class="card-body">
                            <div class="p-4">
                                <div class="mb-3 text-center">
                                    <img src="{{ asset('uploads/check-logo.png') }}" width="60" alt="" />
                                </div>
                                <div class="text-center mb-4">
                                    <h5 class="">{{ env('APP_NAME') }}</h5>
                                    <p class="mb-0">Please fill the below details to create your account</p>
                                </div>
                                <div class="form-body">
                                    <form class="row g-3" action="{{ route('dashboard.dosignup') }}" method="POST">
                                        @csrf

                                        <!-- Success Message -->
                                        @if (session('success'))
                                            <div class="col-12">
                                                <div class="alert alert-success" role="alert">
                                                    {{ session('success') }}
                                                </div>
                                            </div>
                                        @endif

                                        <!-- Full Name -->
                                        <div class="col-12">
                                            <label for="inputUsername" class="form-label">Full Name</label>
                                            <input type="text" class="form-control" id="inputUsername" name="name"
                                                placeholder="John" value="{{ old('name') }}" required>
                                            @error('name')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Email Address -->
                                        <div class="col-12">
                                            <label for="inputEmailAddress" class="form-label">Email Address</label>
                                            <input type="email" class="form-control" id="inputEmailAddress" name="email"
                                                placeholder="example@user.com" value="{{ old('email') }}" required>
                                            @error('email')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Password -->
                                        <div class="col-12">
                                            <label for="inputChoosePassword" class="form-label">Password</label>
                                            <div class="input-group" id="show_hide_password">
                                                <input type="password" class="form-control border-end-0"
                                                    id="inputChoosePassword" name="password" placeholder="Enter Password"
                                                    value="{{ old('password') }}" required>
                                                <a href="javascript:;" class="input-group-text bg-transparent"><i
                                                        class='bx bx-hide'></i></a>
                                            </div>
                                            @error('password')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Company Name -->
                                        <div class="col-12">
                                            <label for="inputCompanyName" class="form-label">Company Name</label>
                                            <input type="text" class="form-control" id="inputCompanyName"
                                                name="company_name" placeholder="ABC Company"
                                                value="{{ old('company_name') }}" required>
                                            @error('company_name')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Terms and Conditions -->
                                        <div class="col-12">
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked"
                                                    name="terms" required>
                                                <label class="form-check-label" for="flexSwitchCheckChecked">I read and
                                                    agree to Terms & Conditions</label>
                                            </div>
                                            @error('terms')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Submit Button -->
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary">Sign up</button>
                                            </div>
                                        </div>

                                        <!-- Sign in Link -->
                                        <div class="col-12">
                                            <div class="text-center">
                                                <p class="mb-0">Already have an account? <a
                                                        href="{{ route('dashboard.login') }}">Sign in here</a></p>
                                            </div>
                                        </div>
                                    </form>

                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>
@endsection
