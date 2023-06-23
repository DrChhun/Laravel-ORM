<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $data = Client::all();
        $trash = Client::onlyTrashed()->get();
        return view('list', compact('data', 'trash'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('client-form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $content = Client::create([
            'company' => $request->company,
            'vat' => $request->vat,
            'address' => $request->address
        ]);

        $content->save();
        
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {   
        $data = Client::where('id', $id)->get();
        return view('update-client', ["id" => $id], compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {   
        $content = Client::find($id)->update([
            'company' => $request->company,
            'vat' => $request->vat,
            'address' => $request->address
        ]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        dd("Hello");
    }
}
