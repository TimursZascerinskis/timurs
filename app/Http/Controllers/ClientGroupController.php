<?php

namespace App\Http\Controllers;

use App\Models\ClientGroup;
use Illuminate\Http\Request;
use App\Models\Client; // neaizmirsti augšpusē

class ClientGroupController extends Controller
{

    public function index()
    {
        $groups = ClientGroup::all();
        return view('client_groups.index', compact('groups'));
    }

    

public function create()
{
    $clients = Client::all(); 
    return view('client_groups.create', compact('clients'));
}


    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
    ]);

    ClientGroup::create(['name' => $request->name]);

    return redirect()->route('client-groups.index')->with('success', 'Grupa pievienota!');
}


    public function show(ClientGroup $clientGroup)
    {
        //
    }


    public function edit(ClientGroup $clientGroup)
    {
         return view('client_groups.edit', compact('clientGroup'));
    }


public function update(Request $request, ClientGroup $clientGroup)
{
    $request->validate([
        'name' => 'required|string|max:255',
    ]);

    $clientGroup->update(['name' => $request->name]);

    return redirect()->route('client-groups.index')->with('success', 'Grupa atjaunināta!');
}


public function destroy(ClientGroup $clientGroup)
{
    $clientGroup->delete();

    return redirect()->route('client-groups.index')->with('success', 'Grupa dzēsta!');
}
}
