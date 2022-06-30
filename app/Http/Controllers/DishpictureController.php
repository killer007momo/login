<?php

namespace App\Http\Controllers;
use App\Models\Dishpicture;
use Illuminate\Http\Request;

class DishpictureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dishpicture = Dishpicture::all();

        return response()->json($dishpicture);
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
        $dishpicture  =  Dishpicture::create($request->all());
         return response()->json(null,202);
        /*
        $dishpicture = new Dishpicture();
        $dishpicture->dish_id = $request->dish_id ;
        $dishpicture->picturepath =  $request->picturepath ;
        $dishpicture->save();

        return response()->json();
        */
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
         $dishpicture =  Dishpicture::find($id);
        $dishpicture->update($request->all());
         return response()->json(null,202);
        /*
        $dishpicture =  Dishpicture::find($id);

        $dishpicture->dish_id = $request->dish_id ;
        $dishpicture->picturepath =  $request->picturepath ;
        $dishpicture->save();
        
        return response()->json();
        */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $dishpicture = Dishpicture::find($id) ;  
         $dishpicture->delete();

        // On retourne la réponse JSON
       return response()->json();
    }
}
