<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //$this->call(TrackingTableSeeder::class);

        DB::table('transactions')->insert([
            'name' => 'Kelvin O Lawson',
            'amount' => 3900,
            'ref' => Str::random(8),
            'narration' => 'Sent to Sandra Kelly Account ',
            'balance' => '5,000****',
            'category' => 'Domestic',
        ]);
    }
}
