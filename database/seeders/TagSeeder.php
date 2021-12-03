<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tag = new Tag();
        $tag->name = 'Job';
        $tag->save();

        $tag = new Tag();
        $tag->name = 'School';
        $tag->save();

        $tag = new Tag();
        $tag->name = 'Personal';
        $tag->save();

    }
}
