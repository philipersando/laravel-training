<?php

namespace App\Http\Controllers;

use App\Http\Requests\Car\StoreCarRequest;
use App\Http\Requests\Car\UpdateCarRequest;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{

    private function getUserOwnedCarbyID($carid)
    {
        return auth()->user()->cars()->findOrFail($carid);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::where('status','available')->where('user_id', '<>', auth()->id())->latest()->paginate(6);

        return view('car.list', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('car.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCarRequest $request)
    {
        $data = $request->safe(['brand', 'model','year','description', 'location', 'price_per_day']);
        auth()->user()->cars()->create($data);

        return redirect()->route('create_car')->with('success',true);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $cars = auth()->user()->cars()->latest()->paginate(6);

        return view('car.owned_list', compact('cars'));


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $car = $this->getUserOwnedCarbyID($id);

        return view('car.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCarRequest $request, string $id)
    {
        $data = $request->safe(['brand', 'model','year','description', 'location', 'price_per_day', 'status']);

        $car = $this->getUserOwnedCarbyID($id);

        $car->update($data);

        return redirect()->route('edit_owned_car', $car->id)
            ->with('success',true)
            ->with('error', 'Updating prohibited! The car is currently being rented');
    }




    public function carDetails($id)
    {
        $cars = Car::where('status','available')->where('user_id', '<>', auth()->id())->latest()->paginate(6);

    }

}
