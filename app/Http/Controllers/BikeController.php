<?php

namespace App\Http\Controllers;

use App\Models\Bike;
use App\Models\BikeBrand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function homeView()
    {
        //
        $bikes = Bike::all();
        return view('home', compact('bikes'));
    }

    public function insertView(){
        $brands = BikeBrand::all();
        return view('insertBike', compact('brands'));
    }

    public function updateView($id){

        $modelBike = Bike::find($id);

        return view('update', compact('modelBike'));
    }

    public function store(Request $request)
    {
        $modelBike = new Bike();
        $file = $request->file('image');
        $imageName = $file->getClientOriginalName();
        Storage::putFileAs('public/images/', $file, $imageName);
        $url = 'public/image/'.$imageName;

        $modelBike->bikeName = $request->nameValue;
        $modelBike->bikePrice = $request->priceValue;
        $modelBike->bikeDescription = $request->descValue;
        $modelBike->brandId = $request->bikeBrand;
        $modelBike->bikeImageUrl = $url;

        $modelBike->save();

        return redirect('/');



    }

    public function update(Request $request, $id)
    {
        $modelBike = Bike::find($id);
        $modelBike->bikeName = $request ->nameValue;
        $modelBike->bikePrice = $request->priceValue;

        $modelBike->save();
        return redirect('/');
    }

    public function destroy($id)
    {
        $modelBike = Bike::find($id);

        if ($modelBike) {
            # code...
            $modelBike->delete();
        }

        return redirect('/');
    }
}
