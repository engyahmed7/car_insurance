<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\PackList;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('cars.index', ['cars' => $cars]);
    }
    public function create($Pack_id)
    {
        $pack = PackList::where('pack_id', $Pack_id)->first();
        return view('cars.create', ['pack' => $Pack_id]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'car_brand' => 'required',
            'car_number' => 'required',
            'estimated_price' => 'required',
            'specification' => 'required',
            'city' => 'required',
            'year' => 'required',

        ]);

        $requestdata = request()->all();
        $res = Car::create(
            array(
            'id' => $requestdata['id'],
            'car_brand' => $requestdata['car_brand'],
            'car_number' => $requestdata['car_number'],
            'estimated_price' => $requestdata['estimated_price'],
            'specification' => $requestdata['specification'],
            'city' => $requestdata['city'],
            'year' => $requestdata['year'],
            // 'pack_id' => $requestdata['pack_id'],
            'updated_at' => $requestdata['updated_at'],
            'created_at' => $requestdata['created_at'],
        )
        );
        return redirect()->route('cars.index');
    }

    public function show($CarId)
    {
        $cars = Car::find($CarId);
        return view('cars.show', ['cars' => $cars]);
    }

    public function updateView($carid)
    {
        $cars = Car::find($carid);
        return view('cars.update', ['cars' => $cars]);
    }

    public function delete($carid)
    {
        Car::where('id', $carid)->delete();
        $cars = Car::all();
        return view('cars.index', ['cars' => $cars]);
    }
    public function makeUpdate(Request $request)
    {

        $req = request()->all();
        Car::where('id', $req['id'])->update(
            array('car_brand' => $request['car_brand'],
            'car_number' => $request['car_number'],
            'estimated_price' => $request['estimated_price'],
            'specification' => $request['specification'],
            'city' => $request['city'],
            'year' => $request['year'],
            // 'pack_id' => $request['pack_id'],
            'updated_at' => $request['updated_at'],
            'created_at' => $request['created_at'],
        )

        );

        return redirect()->route('cars.index');
    }
}
