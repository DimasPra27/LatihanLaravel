<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        //APi URL
        $url = "https://young-temple-89493.herokuapp.com/notes"; 
        
        //create a new Curl Resource
        $ch = curl_init($url);

        //return page content
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);

        //grab URL and pass it to the variable. 
        curl_setopt($ch, CURLOPT_URL, $url); 
  
        $result = curl_exec($ch); 

        //return $result;

        $Result = json_decode($result);
  
        return view('TestApi',['data' => $Result]);   
    }

    public function form()
    {
        return view('ApiPost');
    }

    public function insert(Request $request)
    {

        //dd($request);
        $url = "https://young-temple-89493.herokuapp.com/notes";

        $ch = curl_init($url);

        $data = array(
            'title' => $request->title,
            'content' => $request->content
        );  
        //$payload = array("Data" => $data);
        $payload = "title=" + $request->title + "&content=" + $request->content;

        //attach encoded JSON string to the POST fields
        curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

        //set the content type to application/json
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));

        //return response instead of outputting
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $result = curl_exec($ch);

        curl_close($ch);

        return redirect('/testApi');

    }
}
