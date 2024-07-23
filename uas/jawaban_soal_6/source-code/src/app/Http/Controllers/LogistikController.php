<?php

namespace App\Http\Controllers;

use App\Models\Logistik;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class LogistikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $query = DB ::connection('mysql')->table('logistiks')->get();
        return response()->json($query, 200);
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
        $this->validate($request, [
            'name' => 'required|string'
        ]);
        $logistik = [
            'name' => $request->input('name'),
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString(),
        ];
        $id = DB::connection('mysql')->table('logistiks')->insertGetid($logistik);
        $data = DB::connection('mysql')->table('logistiks')->where('id', $id)->first();
        $response = [
            'message' => 'true',
            'message' => 'Product Created',
            'date' => $data,
        ];
        return response()->json($response, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Logistik  $
     * @return \Illuminate\Http\Response
     */
    public function show($Logistik)
    {
        $data = Logistik::find($id);
        if($data){
            return response()->json([
                'success' => 'true',
                'message' => 'Data Retrieve',
                'data' => $data
            ]);
        }else{
            return response()->json([
                'success' => 'false',
                'message' => 'Parameter Not Found',

            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Logistik  $logistik
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $this->validate($request, [
            'nama' => 'required|string',
        ]);

        $data = Logistik::find($id);

        if($data){
            $data->nama = $request->input('nama');
            $data->updated_at = \Carbon\Carbon::now()->toDateTimeString();
            $data->save();
            return response()->json([
                'success' => 'true',
                'message' => 'Data Updated',
                'data' => $data,
            ]);
        }else{
            return response()->json([
                'success' => 'false',
                'message' => 'Data Not Found',
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Logistik  $logistik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Logistik $logistik)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Logistik  $logistik
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Logistik::find($id);
        if($data){
            $data->delete();
            return response()->json([
                'success' => 'true',
                'message' => 'Data Deleted',
            ]);
    }else{
        return response()->json([
            'success' => 'false',
            'message' => 'Data Not Found',
        ]);
    }
    }
}
