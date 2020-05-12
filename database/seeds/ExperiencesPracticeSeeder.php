<?php

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use App\Models\PracticeExperience;

class ExperiencesPracticeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                "level" => 0,
                "experience" => 104
            ],
            [
                "level" => 1,
                "experience" => 159
            ],
            [
                "level" => 2,
                "experience" => 257
            ],
            [
                "level" => 3,
                "experience" => 412
            ],
            [
                "level" => 4,
                "experience" => 644
            ],
            [
                "level" => 5,
                "experience" => 969
            ],
            [
                "level" => 6,
                "experience" => 1407
            ],
            [
                "level" => 7,
                "experience" => 1980
            ],
            [
                "level" => 8,
                "experience" => 2707
            ],
            [
                "level" => 9,
                "experience" => 3612
            ],
            [
                "level" => 10,
                "experience" => 4717
            ],
            [
                "level" => 11,
                "experience" => 6048
            ],
            [
                "level" => 12,
                "experience" => 7628
            ],
            [
                "level" => 13,
                "experience" => 9484
            ],
            [
                "level" => 14,
                "experience" => 10478
            ],
            [
                "level" => 15,
                "experience" => 12717
            ],
            [
                "level" => 16,
                "experience" => 15279
            ],
            [
                "level" => 17,
                "experience" => 18189
            ],
            [
                "level" => 18,
                "experience" => 21474
            ],
            [
                "level" => 19,
                "experience" => 25162
            ],
            [
                "level" => 20,
                "experience" => 29279
            ],
            [
                "level" => 21,
                "experience" => 41380
            ],
            [
                "level" => 22,
                "experience" => 51895
            ],
            [
                "level" => 23,
                "experience" => 64284
            ],
            [
                "level" => 24,
                "experience" => 78767
            ],
            [
                "level" => 25,
                "experience" => 96512
            ],
            [
                "level" => 26,
                "experience" => 118227
            ],
            [
                "level" => 27,
                "experience" => 144236
            ],
            [
                "level" => 28,
                "experience" => 175967
            ],
            [
                "level" => 29,
                "experience" => 214679
            ]
        ];

        PracticeExperience::insert(collect($items)->map(function ($item) {
            return array_merge($item, [
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now(),
            ]);
        })
        ->toArray());
    }
}
