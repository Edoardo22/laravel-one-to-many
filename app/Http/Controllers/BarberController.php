<?php

namespace App\Http\Controllers;

use App\barber;
use Illuminate\Http\Request;

class BarberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barbers = barber::all();
        return view('barbers.index', compact('barbers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barbers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $barber = new barber;
        $data = $request->validate([
            'name' => 'required|min:3|max:255',
            'description' => 'required|min:10|max:500',
            'image' => 'required|min:5|max:300',
            'price' => 'required|min:1|max:10',
        ]);
        $barber->name = $request->name;
        $barber->price = $request->price;
        $barber->image = $request->image;
        $barber->description = $request->description;

        $barber->save($data);
        return redirect('/barbers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\barber  $barber
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barber = barber::find($id);
        return view('barbers.show', compact('barber'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\barber  $barber
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barber = barber::find($id);
        return view('barbers.edit', compact('barber'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\barber  $barber
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $barber = barber::find($id);
        $data = $request->validate([
            'name' => 'required|min:3|max:255',
            'description' => 'required|min:10|max:500',
            'image' => 'required|min:5|max:300',
            'price' => 'required|min:1|max:10',
        ]);
        $barber->name = $request->name;
        $barber->price = $request->price;
        $barber->image = $request->image;
        $barber->description = $request->description;
        $barber->save($data);
        return redirect('/barbers');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\barber  $barber
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $barber = barber::find($id);
        $barber->delete();
        return redirect('/barbers');
    }
}
