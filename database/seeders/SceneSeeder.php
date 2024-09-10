<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Scene;
use App\Models\Choice;
use App\Models\Hint;

class SceneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $scene1 = Scene::create(['title' => 'The Beginning', 'description' => 'You wake up in a mysterious forest.']);
        $scene2 = Scene::create(['title' => 'The Cave', 'description' => 'You enter a dark cave.']);
        $scene3 = Scene::create(['title' => 'The River', 'description' => 'You reach a fast-flowing river.']);

        Choice::create(['scene_id' => $scene1->id, 'text' => 'Enter the cave', 'next_scene_id' => $scene2->id]);
        Choice::create(['scene_id' => $scene1->id, 'text' => 'Walk to the river', 'next_scene_id' => $scene3->id]);

        Hint::create(['scene_id' => $scene1->id, 'hint' => 'It might be safer to explore the river first.']);
    }
}
