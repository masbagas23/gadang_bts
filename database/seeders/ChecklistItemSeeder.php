<?php

namespace Database\Seeders;

use App\Models\ChecklistItem;
use Illuminate\Database\Seeder;

class ChecklistItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ChecklistItem::insert([
            ['id' => 1, 'name' => "testitem1", 'checklist_id'=>1],
            ['id' => 2, 'name' => "testitem2", 'checklist_id'=>1],
            ['id' => 3, 'name' => "test2", 'checklist_id'=>2]
        ]);
    }
}
