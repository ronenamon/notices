<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class FirebaseController extends Controller
{


    public function connection(){

        $fb="laravelintegration-firebase-adminsdk-os4zo-e922e4fce3.json";
        $dir    = "../firebase_files/";

        $serviceAccount = ServiceAccount::fromJsonFile($dir.$fb);

        $firebase = (new Factory)
        ->withServiceAccount($serviceAccount)
        ->withDatabaseUri('https://laravelintegration.firebaseio.com/')
        ->create();

        $database = $firebase->getDatabase();

        $tt = $database->getReference('blog')->getvalue();
        //print_r(json_encode($tt));

        $ref = $database->getReference('blog/posts');
        $s = $ref->getChild("")->getSnapshot(); //$ref->getChildKeys();;
        print_r(json_encode($s));



            
      /*   $newPost = $database


        ->getReference('blog/posts')
        ->push([
        'title' => 'aa' ,
        'category' => 'aa'
        ]);


        echo '<pre>';
        print_r($newPost->getvalue());  */




    }


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
}
