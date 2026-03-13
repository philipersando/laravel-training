<x-layout title="Login">
    
    <x-slot:title>Login</x-slot:title>

    <div class="container">
        <div class="row justify-content-center align-items-center" style="min-height: 80vh;">
            <div class="col-md-5 col-lg-4">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-5">
                        <h3 class="text-center mb-4 fw-bold">Login</h3>
                        
                        <form action="#" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" placeholder="name@example.com" required>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" placeholder="Enter password" required>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-success btn-lg">Login</button>
                            </div>

                            <div class="text-center mt-4">
                                <p class="small text-muted">Don't have an account? <a href="{{ route('registration') }}" class="text-decoration-none text-success">Register</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout>