<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'service_id' => 'required|exists:services,id',
        'booking_date' => 'required|date|after_or_equal:today',
    ]);

    Booking::create([
        'user_id' => auth()->id(),
        'service_id' => $request->service_id,
        'booking_date' => $request->booking_date,
        'status' => 'pending',
    ]);

    return response()->json(['message' => 'Booking successful']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Booking $booking)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Booking $booking)
    {
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Booking $booking)
    {
        
    }
}
