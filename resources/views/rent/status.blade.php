<x-layout>
    
    <x-slot:title>Add New Car</x-slot:title>

    <div class="container-fluid px-4 px-md-5 py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-6">
                
                <div class="p-5 bg-white border rounded-3 shadow-sm mt-3 mb-3">
        
                    <h4 class="fw-bold mb-3">Rent Details</h4>
                    <hr>
                    
                    <div class="mb-4">
                        <h2 class="h3 mb-1">{{ $rent->car->brand }} {{ $rent->car->model }}</h2>
                        <h4 class="h3 mb-1">Status: {{ $rent->status }}</h4>
                    </div>

                    <ul class="list-unstyled">
                        {{-- <li class="mb-3 d-flex justify-content-between">
                            <span class="text-muted">Owner:</span>
                            <strong>{{ $car->owner->last_name . ", " . $car->owner->first_name  }}</strong>
                        </li> --}}
                        <li class="mb-3 d-flex justify-content-between">
                            <span class="text-muted">Year:</span>
                            <strong>{{ $rent->car->year }}</strong>
                        </li>
                        <li class="mb-3 d-flex justify-content-between">
                            <span class="text-muted">Location:</span>
                            <strong>{{ $rent->car->location }}</strong>
                        </li>
                        <li class="mb-3 d-flex justify-content-between">
                            <span class="text-muted">Price:</span>
                            <strong class="text-success">₱ {{ number_format($rent->total_price, 2) }} / Day</strong>
                        </li>
                        <li class="mb-3">
                            <span class="text-muted d-block mb-3">Description:</span>
                            <p class="text-secondary">{{ $rent->car->description }}</p>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>

</x-layout>