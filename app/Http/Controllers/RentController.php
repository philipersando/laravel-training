<?php

namespace App\Http\Controllers;

use App\Http\Requests\Rent\StoreRentRequest;
use App\Models\Car;
use App\Models\Rental;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class RentController extends Controller
{

    public function create(string $id)
    {
        $car = Car::with('owner')
            ->where('status','available')
            ->where('user_id', '<>', auth()->id())
            ->findOrFail($id);

        return view('car.available_details', compact('car'));
    }


    public function store(StoreRentRequest $request)
    {
        $data = $request->safe(['car_id', 'start_date','end_date']);

        $car = Car::where('status','available')->where('user_id', '<>', auth()->id())->findOrFail($data['car_id']);

        if(Rental::isCurrentlyRented($car->id)) {
            return back()->with('error', 'This car is currently unavailable.');
        }

        $start_date = Carbon::parse($data['start_date']);
        $end_date = Carbon::parse($data['end_date']);

        if($start_date == $end_date)
        {
            $data['total_price'] = $car->price_per_day;
        }
        else
        {
            $days = $start_date->diffInDays($end_date) + 1;
            $data['total_price'] = $car->price_per_day * $days;
        }

        $save = auth()->user()->rentals()->create($data);

        return redirect()->route('car_rent_status', $save->id);
    }


    public function show(string $id)
    {
        $rent = auth()->user()->rentals()->with('car')->findOrFail($id);

        return view('rent.status', compact('rent'));
    }


    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }


    public function destroy(string $id)
    {
        //
    }
}
