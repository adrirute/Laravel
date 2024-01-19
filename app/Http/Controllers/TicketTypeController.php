<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TicketType;

class TicketTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ticket_types = TicketType::all();

        return view('ticket_types/index',[
            'ticket_types' => $ticket_types
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ticket_types/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ticket_type = new TicketType;
        $ticket_type -> type = $request -> input('type');
        $ticket_type -> save();

        return redirect('/ticket_types');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $ticket_type = TicketType::find($id);
        return view('ticket_types/show', ['ticket_type' => $ticket_type]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
