<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hotel;
use App\Reservation;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

        $reservations = $user->reservation()->get();

        $hotel_name = array();
        foreach ($reservations as $reservation) {
            $room = $reservation->room;
        }

        return view('pages.myReservations', compact('reservations'));
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
        $reservation = new Reservation([
            'from' => $request->get('from'),
            'to' => $request->get('to'),
            'room_num' => $request->get('room_num'),
            'room_id' => $request->get('room_id'),
            'persons' => $request->get('persons'),
            'hotel_name' => $request->get('hotel_name')
        ]);


        $user = Auth::user();
        $user->reservation()->save($reservation);

        return redirect('/')->with('success', 'Reservation is made!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $hotel = Hotel::findOrFail($id);

        $rooms = $hotel->room;

        $facilities = $hotel->facility;

        return view('pages.reservationDetails',(compact('hotel')));
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
        
        $reservation = Reservation::findOrFail($id);

        $reservation->delete();

        return redirect('/')->with('success', 'Reservation is successfully canceled!');
    }
}
