<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Miralexsky\OzonApi\OzonClient;
use Miralexsky\OzonApi\OzonDTO\OzonClientException;

class OzonController extends Controller
{
    public function DeliveryVariants()
    {
        $client = new OzonClient(false);

        try {
            $token = $client->authorize();
        } catch (OzonClientException $e) {
            //throw $th;
        }

        $data =  $client->getVariants();
        return response()->json($data);
    }

    public function DeliveryCityList()
    {
        $client = new OzonClient(false);

        try {
            $token = $client->authorize();
        } catch (OzonClientException $e) {
            //throw $th;
        }

        $data =  $client->getCities();
        return response()->json($data);
    }

    public function getVariantsByCity(Request $request){
        $client = new OzonClient(false);

        try {
            $token = $client->authorize();
        } catch (OzonClientException $e) {
            //throw $th;
        }

        $data =  $client->getVariantsByCity($request->city);
        return response()->json($data);
    }

    public function getVariants(){
        $client = new OzonClient(false);

        try {
            $token = $client->authorize();
        } catch (OzonClientException $e) {
            //throw $th;
        }

        $data =  $client->getVariants();
        return response()->json($data);
    }
}
