<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Publication;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $userId = $request->get('userId');

        $response = \DB::table('publications')
        ->select('publications.*', 'receptors.name as receptor_name', 'receptors.picture as receptor_picture', 'senders.name as sender_name', 'senders.picture as sender_picture', 'cards.path')
        ->join('users as receptors', 'receptors.id', '=', 'publications.receptor_user_id')
        ->join('users as senders', 'senders.id', '=', 'publications.sender_user_id')
        ->join('cards', 'cards.id', '=', 'publications.card_id')
        ->when($userId, function($query) use ($userId){
            return $query->where('senders.id', $userId );
        })
        ->latest()
        ->get();

        return response()->json($response);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $response = \DB::table('publications')
        ->select('publications.*', 'receptors.name as receptor_name', 'senders.name as sender_name', 'cards.path')
        ->join('users as receptors', 'receptors.id', '=', 'publications.receptor_user_id')
        ->join('users as senders', 'senders.id', '=', 'publications.sender_user_id')
        ->join('cards', 'cards.id', '=', 'publications.card_id')
        ->get();

        return response()->json($response);
        /*
        $publication = new Publication();
        $publication->description = $request->get('description');
        $publication->sender_user_id = $request->get('sender_id');;
        $publication->receptor_user_id = $request->get('receptor_id');;
        if($publication->save()){
            $success = ['success'=>'si'];
            return response()->json($success);
        }else{
            $success = ['success'=>'no'];
            return response()->json($success);
        }*/
    }

    public function storeGet(Request $request)
    {
        
        $publication = new Publication();
        $publication->description = $request->get('description');
        $publication->sender_user_id = $request->get('sender_id');
        $publication->receptor_user_id = $request->get('receptor_id');
        $publication->card_id = $request->get('card_id');
        if($publication->save()){
            $success = ['res'=>'si'];
            return response()->json($success);
        }else{
            $success = ['res'=>'no'];
            return response()->json($success);
        }
        
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
