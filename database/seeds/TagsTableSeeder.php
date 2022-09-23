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
            'vincitore becchi',
            'tiramisù',
            'Alessandro Orlando',
            'Antonio Zequila',
            'Palmiro Togliatti',
            'Bettino Craxi'
        ];
        
        foreach ($tags as $tag) {
            $newTag = new Tag();
            $newTag->name = $tag;
            $newTag->save();
        }
    }
}
