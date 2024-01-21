<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $games = [
            ['application_id' => 1, 'creator_id' => 1, 'link' => 'https://memoristudio.scify.org/flavor/522/cards', 'name' => 'Παιχνίδι μνήμης', 'date_of_creation' => '2016-05-21'],
            ['application_id' => 1, 'creator_id' => 2, 'link' => 'https://memoristudio.scify.org/flavor/442/cards', 'name' => 'Παιχνίδι μνήμης με τον Θησέα', 'date_of_creation' => '2017-05-21'],
            ['application_id' => 1, 'creator_id' => 2, 'link' => 'https://memoristudio.scify.org/flavor/325/cards', 'name' => 'Modern items', 'date_of_creation' => '2017-05-22'],
            ['application_id' => 1, 'creator_id' => 3, 'link' => 'https://memoristudio.scify.org/flavor/295/cards', 'name' => 'Κύκλοι και γραμμές εν δράσει (λίγες κάρτες)', 'date_of_creation' => '2017-05-23'],
            ['application_id' => 1, 'creator_id' => 3, 'link' => 'https://memoristudio.scify.org/flavor/288/cards', 'name' => 'Πασχαλινα έθιμα', 'date_of_creation' => '2018-05-24'],
            ['application_id' => 1, 'creator_id' => 3, 'link' => 'https://memoristudio.scify.org/flavor/240/cards', 'name' => 'Κύκλοι και γραμμές εν δράσει...', 'date_of_creation' => '2018-05-25'],
            ['application_id' => 1, 'creator_id' => 3, 'link' => 'https://memoristudio.scify.org/flavor/232/cards', 'name' => 'Οι Θεοί του Ολύμπου', 'date_of_creation' => '2019-05-26'],
            ['application_id' => 1, 'creator_id' => 3, 'link' => 'https://memoristudio.scify.org/flavor/218/cards', 'name' => 'Και αέρα στα πανιά μας !!!', 'date_of_creation' => '2019-05-27'],
            ['application_id' => 1, 'creator_id' => 3, 'link' => 'https://memoristudio.scify.org/flavor/190/cards', 'name' => 'Το ατύχημα των σχημάτων μια βροχερή μέρα!', 'date_of_creation' => '2020-05-28'],
            ['application_id' => 1, 'creator_id' => 3, 'link' => 'https://memoristudio.scify.org/flavor/177/cards', 'name' => 'Μυστήριο στο μουσείο...', 'date_of_creation' => '2020-05-28'],
            ['application_id' => 2, 'creator_id' => 4, 'link' => 'https://dianoia.scify.org/storage/resources/pdf/15_4-()_2021-12-03_07_08_04.pdf', 'name' => 'Εναλλαγές', 'date_of_creation' => '2018-05-25'],
            ['application_id' => 2, 'creator_id' => 4, 'link' => 'https://dianoia.scify.org/storage/resources/pdf/50_Attention2-Copycorrectly(Normal)_2021-12-03_08_12_58.pdf', 'name' => 'Copy Correctly', 'date_of_creation' => '2019-05-26'],
            ['application_id' => 2, 'creator_id' => 4, 'link' => 'https://dianoia.scify.org/storage/resources/pdf/115_1-()_2021-12-15_04_28_39.pdf', 'name' => 'Σκίαση σχημάτων', 'date_of_creation' => '2019-05-27'],
        ];

        foreach ($games as $gameData) {
            Game::create($gameData);
        }
    }
}
