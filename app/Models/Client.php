<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
    'entry_type',
    'type',
    'registration_number',
    'name',
    'legal_address',
    'is_vat_payer',
    'vat_rate',
    'personal_code',
    'full_name',
    'address',
    'physical_address',
    'correspondence_address',
    'country',
    'phone',
    'client_id_number',
    'email',
    'document_email',
    'balance',
    'payment_days',
    'discount',
    'notes',
    'contact_person',

];



    public function bankAccounts()
    {
        return $this->hasMany(BankAccount::class);
    }
    public function groups()
{
    return $this->belongsToMany(ClientGroup::class, 'client_client_group');
}

}
