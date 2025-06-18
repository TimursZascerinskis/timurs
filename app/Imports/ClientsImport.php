<?php

namespace App\Imports;

use App\Models\Client;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ClientsImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        $mapped = [
    'name' => $row['nosaukums'] ?? '',
    'registration_number' => $row['regnr'] ?? '',
    'legal_address' => $row['jurid_adrese'] ?? '',
    'physical_address' => $row['fiz_adrese'] ?? '',
    'country' => $row['valsts'] ?? '',
    'phone' => $row['telefons'] ?? '',
    'email' => $row['e_pasts'] ?? '',
    'discount' => $row['atlaide'] ?? 0,
    'balance' => $row['kopa'] ?? 0,
    'client_id_number' => $row['klienta_kods'] ?? '',
    'contact_person' => $row['kontaktpersona'] ?? '',
    'document_email' => $row['kontaktpersona_e_pasts'] ?? '',
    'group' => $row['klienta_grupa'] ?? 'Nezināma',
    'notes' => $row['piezimes'] ?? '',
    'payment_days' => $row['apmaksas_dienas'] ?? 0,
    'vat_rate' => $row['pvn_reg_nr'] ?? '0%',
    'is_vat_payer' => isset($row['pvn_maksatajs']) && $row['pvn_maksatajs'],
    'entry_type' => $row['ieraksta_veids'] ?? 'manual',
    'type' => $row['tips'] ?? '',
    'personal_code' => $row['personas_kods'] ?? '',
    'full_name' => $row['pilns_vards'] ?? '',
    'address' => $row['adrese'] ?? '',
    'correspondence_address' => $row['korespondences_adrese'] ?? '',
];

    return new Client($mapped);
    }
}
