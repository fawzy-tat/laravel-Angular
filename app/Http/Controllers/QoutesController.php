<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Qoute;

class QoutesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     public function getQoutes()
     {
       $qoutes = Qoute::all();
       $response = [
         'qoutes' => $qoutes
       ];
       return response()->json($response , 200);
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


     public function addQoute(Request $request)
     {
         $qoute = new Qoute;
         $qoute->content = $request->content;
         $qoute->save();
         return response()->json(['qoute' => $qoute] , 201);
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
     public function updateQoute(Request $request, $id)
       {
           $qoute = Qoute::find($id);
           if(!$qoute)
           {
             return response()->json(['message' => 'Record not found '] , 404);
           }
           $qoute->content = $request->content;
           $qoute->save();
           return response()->json(['qoute' => $qoute] , 200);
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

       public function deleteQoute($id)
       {
           $qoute = Qoute::find($id);
           $qoute->delete();
           return response()->json(['Message' => 'Request deleted succefully'] , 200);
       }
}
