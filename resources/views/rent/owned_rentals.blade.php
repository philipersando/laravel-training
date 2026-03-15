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
                    {{-- <p class="px-3 py-2">{{ $cars->total() }} Found</p> --}}
                </div>
            </div>
            <hr>
            <div class="card-body p-4 p-md-5 bg-light-subtle">
                <div class="row g-4">

                        <div class="col-md-12 col-lg-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Start Date</th>
                                        <th scope="col">End Date</th>
                                        <th scope="col">Car</th>
                                        <th scope="col">Year</th>
                                        <th scope="col">Total Price</th>
                                        <th scope="col">Renter</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($myRentals as $rent)
                                    <tr>
                                        <td>{{ $rent->start_date }}</td>
                                        <td>{{ $rent->end_date }}</td>
                                        <td>{{ $rent->brand . ' ' . $rent->model}}</td>
                                        <td>{{ $rent->year }}</td>
                                        <td>{{ $rent->total_price }}</td>
                                        <td>{{ $rent->last_name . ', ' . $rent->first_name }}</td>
                                        <td>{{ $rent->status }}</td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        {{-- @empty
                        <div class="col-12 text-center py-5">
                            <i class="bi bi-car-front text-muted" style="font-size: 3rem;"></i>
                            <p class="lead text-muted mt-3">No cars available at the moment.</p>
                        </div> --}}

                </div>
            </div>

            {{-- <div class="card-footer bg-white py-4 border-top-0">
                <div class="d-flex justify-content-center mt-4">
                    {{ $cars->links('vendor.pagination.bootstrap-5') }}
                </div>
            </div> --}}

        </div>
    </div>


</x-layout>