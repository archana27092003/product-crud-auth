@extends('dashboard.layouts.app')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="row">
                <div class="col-12 col-lg-8 mx-auto">
                    <div class="card radius-10">
                        <div class="card-header">
                            <h6 class="mb-0">User Profile</h6>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('dashboard.profile.update') }}"
                                enctype="multipart/form-data">
                                @csrf

                                <div class="mb-3 text-center">
                                    <div class="position-relative d-inline-block">
                                        <img src="{{ Auth::user()->avatar ? asset(Auth::user()->avatar) : asset('rock/images/avatars/avatar-2.png') }}"
                                            alt="Profile Picture" class="img-thumbnail rounded-circle" width="150"
                                            height="150" id="profilePicturePreview">

                                        <!-- Camera icon -->
                                        <div class="position-absolute end-0 bottom-0">
                                            <button type="button" class="btn btn-light rounded-circle p-2"
                                                onclick="document.getElementById('profile_picture').click()">
                                                <i class="bx bx-camera"></i>
                                            </button>
                                        </div>

                                        <!-- Hidden file input -->
                                        <input type="file" name="profile_picture" id="profile_picture" class="d-none"
                                            onchange="previewProfilePicture(event)">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        id="name" name="name" value="{{ old('name', Auth::user()->name) }}"
                                        required>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                        id="email" name="email" value="{{ old('email', Auth::user()->email) }}"
                                        required>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">New Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                                        id="password" name="password">
                                    @error('password')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                                    <input type="password" class="form-control" id="password_confirmation"
                                        name="password_confirmation">
                                </div>

                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary">Update Profile</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function previewProfilePicture(event) {
            const reader = new FileReader();
            reader.onload = function() {
                const output = document.getElementById('profilePicturePreview');
                output.src = reader.result;
            };
            reader.readAsDataURL(event.target.files[0]);
        }
    </script>
@endsection
