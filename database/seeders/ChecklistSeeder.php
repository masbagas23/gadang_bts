<?php

namespace Database\Seeders;

use App\Models\Checklist;
use Illuminate\Database\Seeder;

class ChecklistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Checklist::insert([
            ['id' => 1, 'name' => "test"],
            ['id' => 2, 'name' => "test2"]
        ]);
    }
}
