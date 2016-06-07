<?php

use Illuminate\Database\Seeder;
use App/medical;
class medicalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $medical=new medical();
        $medical->name='Amit';
        $medical->save();
    }
}
