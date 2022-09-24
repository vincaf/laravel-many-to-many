<?php

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            '#movie',
            '#series',
            '#cinema',
            '#films',
            '#hollywood',
            '#serieA',
            '#netflix',
            '#primevideo',
            '#dazn',
        ];

        foreach ($tags as $tag){
            $newTag = new Tag();
            $newTag->name = $tag;
            $newTag->save();
        }
    }
}
