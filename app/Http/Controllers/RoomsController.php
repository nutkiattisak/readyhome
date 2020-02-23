<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Room;
use App\Tenant;

class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::all();
        return view('rooms.index')->with('rooms', $rooms);
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
        //
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
        //
    }

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function manage($room_id)
    {
        $room = DB::table('rooms')->where('room_id', $room_id)->first();
        $tenants = Tenant::all()
            ->where('room_id', $room_id)
            ->where('status', 'stay');

        //dd($room);  
        return view('rooms.manage')
            ->with('room', $room)
            ->with('tenants', $tenants);
    }

    public function agreements($id)
    {
        return view('rooms.agreements')->with('room_id', $id);
    }

    public function tenants($id)
    {
        $room = DB::table('rooms')->where('room_id', $id)->first();
        return view('rooms.tenants')->with('room_id', $id);
    }

    public function create_tenants()
    {
       /* DB::table('rooms')->insert(
            ['email' => 'john@example.com', 'votes' => 0]
        );*/
    }
}
