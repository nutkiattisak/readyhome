<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Users\UpdateProfileRequest;
use App\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $users = User::all();

       /*foreach($users as $user){ // คำสั่ง foreach เพื่อวนลูปโดย user มีค่าเท่ากับข้อมูลแต่ละตัวใน users ในแต่ละรอบ
            $data[] = [ // ให้ข้อมูลแต่ละตัวมีค่าตามด้านล่าง
                'id' => $user->user_id, // ข้อมูลชื่อ id เท่ากับข้อมูล id ของ post
                'firstname' => $user->firstname, // ข้อมูลชื่อ post เท่ากับข้อมูล post_text ของ post
                'lastname' => $user->lastname,
                'email' => $user->email,
                'phone' => $user->phone,
                'role' => $user->role,
            ];

        }*/
        //return response()->json($data); 

        return view('users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    public function profile()
    {
        return view('users.profile')->with('user', auth()->user());
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {  

        //dd($request);
        User::create([
            'firtname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'password' => Hash::make($request->email),
            'phone' => $request->phone,
            'role' => $request->role
           
        ]);
        return redirect(route('users'));
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
    public function update(UpdateProfileRequest  $request)
    {
        $user = auth()->user();
        $user->update([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'phone' => $request->phone,
        ]);
        return redirect()->back();
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
