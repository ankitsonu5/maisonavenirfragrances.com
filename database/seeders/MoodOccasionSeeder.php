<?php

namespace Database\Seeders;

use App\Models\Admin\Mood;
use App\Models\Admin\Occasion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoodOccasionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $moods = Mood::all();
        $occasions = Occasion::all();

        foreach ($moods as $mood) {
            foreach ($occasions as $occasion) {
                DB::table('mood_occasion')->insert([
                    'mood_id' => $mood->id,
                    'occasion_id' => $occasion->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
