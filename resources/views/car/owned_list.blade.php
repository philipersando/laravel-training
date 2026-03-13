<x-layout>
    
    <x-slot:title>My Cars</x-slot:title>

    <div class="container-fluid px-4 px-md-5 py-5">
        <div class="card shadow-sm border-0 rounded-3">
            <div class="card-header bg-white py-4 px-4 border-bottom-0">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h3 class="fw-bold text-dark mb-0">My Cars</h3>
                        <p class="text-muted mb-0">List of My Cars</p>
                    </div>
                    <p class="px-3 py-2">{{ $cars->total() }} Found</p>
                </div>
            </div>
            <hr>
            <div class="card-body p-4 p-md-5 bg-light-subtle">
                <div class="row g-4">
                    @forelse($cars as $car)
                        <div class="col-md-4 col-lg-4">
                            <div class="card h-100 shadow-sm border-0 overflow-hidden">
                                <div class="card-body d-flex flex-column p-4">
                                    <h5 class="card-title fw-bold text-success">{{ $car->brand }} {{ $car->model }}
                                        @if($car->status == 'hidden')
                                            <span class="badge bg-danger float-end" style="font-size: 0.5em;">Hidden</span>
                                        @elseif($car->status == 'rented')
                                            <span class="badge bg-warning float-end" style="font-size: 0.5em;">Rented</span>
                                        @else
                                            <span class="badge bg-success float-end" style="font-size: 0.5em;">Available</span>
                                        @endif
                                    </h5>
                                    <h6 class="card-subtitle mb-2 text-muted">{{ $car->year }} • {{ $car->location }}</h6>
                                    <hr class="my-3 opacity-25">
                                    
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <span class="fw-bold fs-5 text-dark">₱ {{ number_format($car->price_per_day, 2) }}</span>
                                            <small class="text-muted">/ day</small>
                                        </div>
                                    </div>
                                    
                                    <a href="{{ route('edit_owned_car', $car->id) }}" class="btn btn-sm btn-success mt-3 w-100 py-2">View Details</a>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div class="col-12 text-center py-5">
                            <i class="bi bi-car-front text-muted" style="font-size: 3rem;"></i>
                            <p class="lead text-muted mt-3">No cars available at the moment.</p>
                        </div>
                    @endforelse
                </div>
            </div>

            <div class="card-footer bg-white py-4 border-top-0">
                <div class="d-flex justify-content-center mt-4">
                    {{ $cars->links('vendor.pagination.bootstrap-5') }}
                </div>
            </div>
        </div>
    </div>


</x-layout>