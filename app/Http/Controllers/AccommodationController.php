<?php 

namespace App\Http\Controllers;

use App\Accommodation;
use Illuminate\Http\Request;

class AccommodationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accommodations = Accommodation::all();
        
        return view('accommodations.index', ['accommodations' => $accommodations]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('accommodations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Citim datele din formular 
        $title = $request->input('title');
        $description = $request->input('description');
        $city = $request->input('city');

        $accommodation = new Accommodation;
        $accommodation->title = $title;
        $accommodation->city = $city;
        $accommodation->description = $description;

        $accommodation->save();

        return redirect()->action('AccommodationController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Accommodation  $accommodation
     * @return \Illuminate\Http\Response
     */
    public function show(Accommodation $accommodation)
    {
        return view('accommodations.show', compact('accommodation'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Accommodation  $accommodation
     * @return \Illuminate\Http\Response
     */
    public function edit(Accommodation $accommodation)
    {
        return view('accommodations.edit', compact('accommodation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Accommodation  $accommodation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Accommodation $accommodation)
    {
        // $accomodation->title = $_POST['title']
        $accommodation->title = $request->input('title'); 
        $accommodation->city = $request->input('city');
        $accommodation->description = $request->input('description'); 

        $accommodation->save();

        return redirect('/accommodations/' . $accommodation->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Accommodation  $accommodation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Accommodation $accommodation)
    {
        //
    }
}
