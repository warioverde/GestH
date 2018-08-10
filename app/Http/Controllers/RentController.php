<?php

namespace App\Http\Controllers;

use App\Rent;
use Illuminate\Http\Request;
use DB;

class RentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Rent::get();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Rent::create($request->all());
        return ['created' => true];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Rent::find($id);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rent = Rent::find($id);
        $rent->update($request->all());
        return ['updated' => true];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rent  $rent
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Rent::destroy($id);
        return ['deleted' => true];
    }
    /**public function asociarConHabitacion(Request $request)
    {
        DB::table("room_rent")->insert(['room_id' => $request->room_id,'rent_id' => $request->rent_id]);
        return['updated' => true];
    }
    public function retornarHabitacion(Request $request)
    {
        DB::table("room_rent")->select(['room_id' => $request->room_id,'rent_id' => $request->rent_id,]);
        return['updated' => true];
    }
    **/
}
