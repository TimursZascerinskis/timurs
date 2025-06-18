<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Imports\ClientsImport;
use App\Exports\ClientsExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\ClientGroup;


class ClientController extends Controller
{
    public function index(Request $request)
    {
        $query = Client::query();

        if ($search = $request->input('search')) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('phone', 'like', "%{$search}%")
                  ->orWhere('registration_number', 'like', "%{$search}%")
                  ->orWhere('contact_person', 'like', "%{$search}%");
            });
        }

        $clients = $query->with('groups')->latest()->paginate(15);


        return view('clients.index', compact('clients'));
    }

    public function create()
{
    $clientGroups = ClientGroup::all();
    return view('clients.create', compact('clientGroups'));
}



    public function store(Request $request)
{
    
    $validated = $request->validate([
        'entry_type' => 'required|string',
        'type' => 'required|string',
        'registration_number' => 'required|string',
        'name' => 'required|string',
        'legal_address' => 'required|string',
        'is_vat_payer' => 'required|in:0,1',
        'vat_rate' => 'required|string',
        'personal_code' => 'required|string',
        'full_name' => 'required|string',
        'address' => 'required|string',
        'physical_address' => 'required|string',
        'correspondence_address' => 'required|string',
        'country' => 'required|string',
        'phone' => 'required|string',
        'client_id_number' => 'required|string',
        'email' => 'required|email',
        'document_email' => 'required|email',
        'balance' => 'required|numeric',
        'payment_days' => 'required|integer',
        'discount' => 'required|numeric',
        'notes' => 'required|string',
        'contact_person' => 'required|string',
        
    ]);

    $client = Client::create($validated);

    $client->groups()->sync($request->input('groups', []));

    return redirect()->route('clients.index')->with('success', 'Klients veiksmīgi pievienots!');
}


    public function update(Request $request, $id)
{
    $client = Client::findOrFail($id);

    $validated = $request->validate([
        'entry_type' => 'required|string',
        'type' => 'required|string',
        'registration_number' => 'required|string',
        'name' => 'required|string',
        'legal_address' => 'required|string',
        'is_vat_payer' => 'required|in:0,1',
        'vat_rate' => 'required|string',
        'personal_code' => 'nullable|string',
        'full_name' => 'nullable|string',
        'address' => 'nullable|string',
        'physical_address' => 'required|string',
        'correspondence_address' => 'nullable|string',
        'country' => 'required|string',
        'phone' => 'required|string',
        'client_id_number' => 'nullable|string',
        'email' => 'required|email',
        'document_email' => 'required|email',
        'balance' => 'required|numeric',
        'payment_days' => 'required|integer',
        'discount' => 'required|numeric',
        'notes' => 'required|string',
        'contact_person' => 'required|string',
    ]);

    $client->update($validated);

  
    $client->groups()->sync($request->input('group_ids', []));

    return redirect()->route('clients.index')->with('success', 'Klients veiksmīgi atjaunināts!');
}

    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();

        return redirect()->route('clients.index')->with('success', 'Klients veiksmīgi dzēsts!');
    }

    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:xls,xlsx'
        ]);

        Excel::import(new ClientsImport, $request->file('file'));

        return redirect()->route('clients.index')->with('success', 'Dati tika veiksmīgi importēti.');
    }

    public function export()
    {
        return Excel::download(new ClientsExport, 'clients.xlsx');
    }

    public function show($id)
    {
        $client = Client::findOrFail($id);
        return view('clients.show', compact('client'));
    }
    public function edit(Client $client)
{
    $groups = ClientGroup::all();
    return view('clients.edit', compact('client', 'groups'));
}
}

