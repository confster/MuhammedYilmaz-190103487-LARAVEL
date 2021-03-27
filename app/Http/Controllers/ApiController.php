<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Client;

class ApiController extends Controller
{
    /*
        This function returns all client rows
    */

    public function index(Request $request){
        $clientsn = Client::all();

        return response($clientsn, 200);
    }

    public function get_client(Request $request){
        $client = Client::find($request->client_id);

        if($client == null){
            return response('No client found!', 404);
        }

        return response($client, 200);
    }
}
