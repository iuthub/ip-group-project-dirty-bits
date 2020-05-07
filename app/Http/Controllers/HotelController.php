<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;
use App\Room;
use App\Facility;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotels = Hotel::all();
        $rooms = Room::all();
        $facilities = Facility::all();

        $title = "Hotel List";

        return view('pages.hotels', compact('title'))
        ->with(compact('hotels'))
        ->with(compact('rooms'))
        ->with(compact('facilities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // $request->validate([
        //     'name'=>'required', 'rating'=>'required',
        //     'type'=>'required', 'website'=>'required',
        //     'description'=>'required', 'address'=>'required',
        //     'country'=>'required', 'city'=>'required',
        //     'zip'=>'required'
        // ]);

        // Set Up Hotel Table

        $hotel = new Hotel([
            'name' => $request->get('name'),
            'rating' => $request->get('rating'),
            'type' => $request->get('hotel_type'),
            'website' => $request->get('website'),
            'description' => $request->get('description'),
            'address' => $request->get('address'),
            'country' => $request->get('country'),
            'city' => $request->get('city'),
            'zip' => $request->get('zip')
        ]);
        $hotel->save();

        $hotel_id = $hotel->id;

        echo $hotel_id;

        // Set Up Room Table
        $price_arr[] = 0;
        if(isset($_POST['price'])){
            if (is_array($_POST['price'])){
                foreach($_POST['price'] as $price){
                    if((int)$price > 0){
                      array_push($price_arr, (int)$price);  
                    }
                }
            }
        } else { 
            return redirect()->back()->with('error', 'Price is not set!');
        }

        if(isset($_POST['room_type'])){
            if (is_array($_POST['room_type'])){
                $i = 1;
                foreach($_POST['room_type'] as $type){
                    $room = new Room([
                        'type' => $type,
                        'price' => $price_arr[$i],
                        'hotel_id' => $hotel_id
                    ]); 
                    $room->save();
                }
            }
        } else { 
            return redirect()->back()->with('error', 'No Room Type is chosen!');
        }

        // Set Up Facility Table

        if(isset($_POST['facility'])){
            if (is_array($_POST['facility'])) {
                foreach($_POST['facility'] as $value){
                    $facility = new Facility([
                        'name' => $value,
                        'hotel_id' => $hotel_id 
                    ]);
                    $facility->save();
                }
            }
        } else { 
            return redirect()->back()->with('error', 'No Facilities are chosen!'); 
        }

        return redirect('/')->with('success', 'Hotel is created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $hotel = Hotel::findOrFail($id);

        $rooms = $hotel->room;
        foreach($rooms as $room){
            Room::findOrFail($room->id)->delete();
        }

        $facilities = $hotel->facility;
        foreach($facilities as $facility){
            Facility::findOrFail($facility->id)->delete();
        }

        $hotel->delete();

        return redirect('/')->with('success', 'Hotel is successfully deleted with rooms and facilities!');
    }
}
