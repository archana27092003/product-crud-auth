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
                                    <p class="mb-0">Please fill in the details to reset your password</p>
                                </div>
                                <div class="form-body">
                                    <form class="row g-3" action="{{ route('dashboard.doResetPassword') }}" method="POST">
                                        @csrf
                                        <input type="hidden" name="token" value="{{ $token }}">
                                        <input type="hidden" name="email" value="{{ $email }}">

                                        <!-- Success Message -->
                                        @if (session('status'))
                                            <div class="col-12">
                                                <div class="alert alert-success" role="alert">
                                                    {{ session('status') }}
                                                </div>
                                            </div>
                                        @endif

                                        <!-- New Password -->
                                        <div class="col-12">
                                            <label for="inputChoosePassword" class="form-label">New Password</label>
                                            <div class="input-group" id="show_hide_password">
                                                <input type="password" class="form-control border-end-0"
                                                       id="inputChoosePassword" name="password" placeholder="Enter New Password" required>
                                                <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                            </div>
                                            @error('password')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Confirm Password -->
                                        <div class="col-12">
                                            <label for="inputConfirmPassword" class="form-label">Confirm Password</label>
                                            <div class="input-group" id="show_hide_password_confirm">
                                                <input type="password" class="form-control border-end-0"
                                                       id="inputConfirmPassword" name="password_confirmation" placeholder="Confirm New Password" required>
                                                <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                            </div>
                                            @error('password_confirmation')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <!-- Submit Button -->
                                        <div class="col-12">
                                            <div class="d-grid">
                                                <button type="submit" class="btn btn-primary">Reset Password</button>
                                            </div>
                                        </div>

                                        <!-- Sign in Link -->
                                        <div class="col-12">
                                            <div class="text-center">
                                                <p class="mb-0">Remembered your password? <a href="{{ route('dashboard.login') }}">Sign in here</a></p>
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



@section('scripts')





@endsection
