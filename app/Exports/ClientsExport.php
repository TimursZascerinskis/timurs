<?php

namespace App\Exports;

use App\Models\Client;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ClientsExport implements FromCollection, WithHeadings, WithMapping
{
    public function collection()
    {
        return Client::all();
    }

    public function headings(): array
{
    return [
        'nosaukums',
        'regnr',
        'jurid_adrese',
        'fiz_adrese',
        'valsts',
        'telefons',
        'e_pasts',
        'atlaide',
        'kopa',
        'klienta_kods',
        'kontaktpersona',
        'kontaktpersona_e_pasts',
        'klienta_grupa',
        'piezimes',
        'apmaksas_dienas',
        'pvn_reg_nr',
        'pvn_maksatajs',
        'ieraksta_veids',
        'tips',
        'personas_kods',
        'pilns_vards',
        'adrese',
        'korespondences_adrese',
    ];
}


    public function map($client): array
{
    return [
        $client->name,
        $client->registration_number,
        $client->legal_address,
        $client->physical_address,
        $client->country,
        $client->phone,
        $client->email,
        $client->discount,
        $client->balance,
        $client->client_id_number,
        $client->contact_person,
        $client->document_email,
        $client->group,
        $client->notes,
        $client->payment_days,
        $client->vat_rate,
        $client->is_vat_payer,
        $client->entry_type,
        $client->type,
        $client->personal_code,
        $client->full_name,
        $client->address,
        $client->correspondence_address,
    ];
}

}
