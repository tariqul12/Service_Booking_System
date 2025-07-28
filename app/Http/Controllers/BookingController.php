<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Routing\controllers\HasMiddleware;
use Illuminate\Routing\controllers\Middleware;

class BookingController extends Controller implements HasMiddleware
{
    public static function middleware(){
        return [
            new Middleware('auth:sanctum')
        ];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Booking::latest()->get();
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
    $booking = $request->user()->bookings()->create([
        'service_id' => $request->service_id,
        'booking_date' => $request->booking_date,
        'status' => 'pending',
    ]);
    
    return response()->json(['message' => 'Booking successful', 'booking' => $booking]);
    }

}
