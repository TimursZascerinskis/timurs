<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    \App\Models\Client::create([
        'name' => 'Jānis Dzelksnis',
        'contact_person' => 'Jānis Dzelksnis',
        'phone' => '21084937',
        'email' => 'janis@demo.lv',
        'registration_number' => '151289-15784',
        'type' => 'Fiziska persona',
        'group' => 'Labot',
    ]);
    // Добавьте другие записи аналогично
}

}
