<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use App\Models\TicketType;

class TicketTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ticket_types')->insert([
            [
                'type' => 'Billete Sencillo'
            ],
            [
                'type' => 'Abono Mensual'
            ],
            [
                'type' => 'Abono Trimestral'
            ]
        ]);
    }
}
