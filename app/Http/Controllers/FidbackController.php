<?php

namespace App\Http\Controllers;

use App\Models\Fidback;
use Illuminate\Http\Request;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Message\AMQPMessage;

class FidbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
            $array = $request->validate([
                'email'=>'required',
                'name'=>'required',
                'message'=>'required'
            ]);
            $json_array = json_encode($array);

        $connection = new AMQPStreamConnection('localhost', 5672, 'guest', 'guest');
        $channel = $connection->channel();

        // $channel->queue_declare('hello', false, false, false, false);

        $msg = new AMQPMessage($json_array);
        $channel->basic_publish($msg, 'rabbit');

        $channel->close();
        $connection->close();

        return redirect()->route('welcome');

        // echo " [x] Sent 'Hello World!'\n";
    }
    // public function store(Request $request)
    // {
        
    //     Fidback::create($request->all());


    // }

    /**
     * Display the specified resource.
     */
    public function show(Fidback $fidback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fidback $fidback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fidback $fidback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fidback $fidback)
    {
        //
    }
}