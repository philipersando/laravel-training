<x-layout>
    <x-slot:title>Rent This Car</x-slot:title>

    <div class="container py-5">
        <div class="row">
            
            <div class="col-lg-6 mb-4">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-3">Car Details</h4>
                        <hr>
                        
                        <div class="mb-4">
                            <h2 class="h3 mb-1">{{ $car->brand }} {{ $car->model }}</h2>
                        </div>

                        <ul class="list-unstyled">
                            <li class="mb-3 d-flex justify-content-between">
                                <span class="text-muted">Owner:</span>
                                <strong>{{ $car->owner->last_name . ", " . $car->owner->first_name  }}</strong>
                            </li>
                            <li class="mb-3 d-flex justify-content-between">
                                <span class="text-muted">Year:</span>
                                <strong>{{ $car->year }}</strong>
                            </li>
                            <li class="mb-3 d-flex justify-content-between">
                                <span class="text-muted">Location:</span>
                                <strong>{{ $car->location }}</strong>
                            </li>
                            <li class="mb-3 d-flex justify-content-between">
                                <span class="text-muted">Rate:</span>
                                <strong class="text-success">₱ {{ number_format($car->price_per_day, 2) }} / Day</strong>
                            </li>
                            <li class="mb-3">
                                <span class="text-muted d-block mb-3">Description:</span>
                                <p class="text-secondary">{{ $car->description }}</p>
                            </li>
                        </ul>
                    
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h4 class="fw-bold mb-4">Rent Car</h4>

                        @if(session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif

                        <form action="{{ route('process_car_rent') }}" method="POST" onsubmit="return confirm('Are you sure you want to rent this car ?')">
                            @csrf

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Pick-up Date</label>
                                    <input type="date" name="start_date" class="form-control" min="{{ date('Y-m-d') }}" value="{{ old('start_date') }}" required>
                                    @error('start_date') 
                                        <div class="text-danger small">{{ $message }}</div> 
                                    @enderror
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Return Date</label>
                                    <input type="date" name="end_date" class="form-control" value="{{ old('end_date') }}" required>
                                    @error('end_date') 
                                        <div class="text-danger small">{{ $message }}</div> 
                                    @enderror
                                </div>
                            </div>

                            <div class="bg-light p-3 rounded mb-4">
                                <div class="d-flex justify-content-between mb-2">
                                    <span>Daily Rate</span>
                                    <span>₱ {{ number_format($car->price_per_day, 2) }}</span>
                                    <input type="hidden"  name="car_id" value="{{ $car->id }}" readonly>
                                </div>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-success btn-lg">Confirm Rent</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-layout>