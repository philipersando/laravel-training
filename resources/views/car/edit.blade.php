<x-layout>
    
    <x-slot:title>Edit Car</x-slot:title>

    <div class="container-fluid px-4 px-md-5 py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-6">
                
                <div class="p-5 bg-white border rounded-3 shadow-sm mt-3 mb-3">
        
                    <h3 class="fw-bold mb-4 text-center">Edit Car Details</h3>
                    
                    @if(session('success'))
                        <div class="alert alert-success" role="alert">
                            Car has been added updated! 
                        </div>
                    @endif

                    <form action="{{ route('update_owned_car', $car->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="brand" class="form-label">Brand Name</label>
                                <input type="text" class="form-control" id="brand" name="brand" value="{{ old('brand', $car->brand)}}" placeholder="Brand Name" required>
                                @error('brand')
                                    <div class="text-danger small">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="brand" class="form-label">Model</label>
                                <input type="text" class="form-control" id="model" name="model" value="{{ old('model', $car->model)}}" placeholder="Model" required>
                                @error('model')
                                    <div class="text-danger small">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="year" class="form-label">Year</label>
                                <input type="text" class="form-control" id="year" name="year" value="{{ old('year', $car->year)}}" placeholder="Year" required>
                                @error('year')
                                    <div class="text-danger small">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <label for="location" class="form-label">Location</label>
                                <input type="text" class="form-control" id="location" name="location" value="{{ old('location', $car->location)}}" placeholder="Location" required>
                                @error('location')
                                    <div class="text-danger small">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="price_per_day" class="form-label">Price per Day</label>
                                <input type="number" class="form-control" id="price_per_day" name="price_per_day" step="0.01" value="{{ old('price_per_day', $car->price_per_day)}}" placeholder="Prce per day" required>
                                @error('price_per_day')
                                    <div class="text-danger small">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="col-md-4 mb-3">
                                <label for="status" class="form-label">Car Status</label>
                                <select class="form-select" id="status" name="status" required>
                                    <option value="" disabled>Select status</option>
                                    <option value="available" {{ old('status', $car->status) == 'available' ? 'selected' : '' }}>
                                        Available
                                    </option>
                                    <option value="rented" {{ old('status', $car->status) == 'rented' ? 'selected' : '' }}>
                                        Rented
                                    </option>
                                    <option value="hidden" {{ old('status', $car->status) == 'hidden' ? 'selected' : '' }}>
                                        Hidden
                                    </option>
                                </select>

                                @error('status')
                                    <div class="text-danger small">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-5">
                            <label for="description" class="form-label">Descrption</label>
                            <textarea class="form-control" id="description" name="description" placeholder="Description" rows="3">{{ old('description', $car->description) }}</textarea>
                        </div>

                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-success btn-lg">Update Car</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

</x-layout>