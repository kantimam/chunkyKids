<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Food;

class FoodController extends Controller
{

    public function searchEdamam(Request $request){
        if($request->query('query') && strlen($request->query('query'))>1){
            $queryParam=$request->query('query');

            $client = new Client();
            $YOUR_APP_ID="9e20d292";
            $YOUR_APP_KEY="1be6d08e27d0a60871a58eb385a61d88";
            $response = $client->request('GET', "https://api.edamam.com/search?q=${queryParam}&app_id=${YOUR_APP_ID}&app_key=${YOUR_APP_KEY}&calories=591-722&health=alcohol-free");
            $statusCode = $response->getStatusCode();
            $body = $response->getBody()->getContents();


            $decodeBody=json_decode($body);

            return view('pages.search_results',['activeRoute'=>'edamam', 'recipeList'=> $decodeBody->hits]);
        }
        
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
