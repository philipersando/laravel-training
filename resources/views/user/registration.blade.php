<x-layout>
    
    <x-slot:title>Registration</x-slot:title>

    <div class="container py-5">
        <div class="row justify-content-center align-items-center" style="min-height: 70vh;">
            <div class="col-md-5 col-lg-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-5">
                        <h3 class="text-center mb-4 fw-bold">Registration</h3>

                        @if(session('success'))
                            <div class="alert alert-success" role="alert">
                                Registration Successful!  <a href="{{ route('login') }}" class="alert-link">Click here to login</a>
                            </div>
                        @endif

                        <form action="{{ route('process_registration') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="last_name" class="form-label">Last Name *</label>
                                <input type="text" class="form-control" id="last_name" name="last_name" value="{{ old('last_name')}}" placeholder="Enter Last Name" required>
                                @error('last_name')
                                    <div class="text-danger small">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="first_name" class="form-label">First Name *</label>
                                <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name')}}" placeholder="Enter First Name" required>
                                @error('first_name')
                                    <div class="text-danger small">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="middle_name" class="form-label">Middle Name </label>
                                <input type="text" class="form-control" id="middle_name" name="middle_name" value="{{ old('middle_name')}}" placeholder="Enter Middle Name">
                                @error('middle_name')
                                    <div class="text-danger small">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address *</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email')}}" placeholder="Enter Email Address" required>
                                @error('email')
                                    <div class="text-danger small">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password *</label>
                                <input type="password" class="form-control" id="password" name="password" value="{{ old('password')}}" placeholder="Enter Password" required>
                                @error('password')
                                    <div class="text-danger small">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Confirm Password *</label>
                                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" value="{{ old('password_confirmation')}}" placeholder="Confirm Password" required>
                                @error('password_confirmation')
                                    <div class="text-danger small">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-success btn-lg">Register</button>
                            </div>

                            <div class="text-center mt-4">
                                <p class="small text-muted"><a href="{{ route('login') }}" class="text-decoration-none text-success">Back to Login</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>