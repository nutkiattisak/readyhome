<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Tenant\CreateTenantRequest;
use App\Tenant;
use App\Room;

class TenantsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('members.index');
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($room_id)
    {
        //$tenant = Tenant::where('room_id', $room_id)->first();
        return view('tenants.create')->with('room_id', $room_id);;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTenantRequest $request)
    {
        $birthdate = $request->birth_date[0] . "-" . $request->birth_date[1] . "-" . $request->birth_date[2];
        $tenant = Tenant::create([
            'firstname' => $request->firstname,
            'lastname' =>$request->lastname,
            'nickname' => $request->nickname,
            'gender' => $request->gender,
            'phone'=> $request->phone,
            'id_number'=> $request->id_number,
            'birthdate'=> $birthdate,
            'email'=> $request->email,
            'address'=> $request->address,
            'room_id' => $request->room_id
        ]);

        return redirect(route('rooms.manage-tenants.create', $request->room_id));
        //$tenant = Tenant::where('room_id', $room_id)->first();
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
}
