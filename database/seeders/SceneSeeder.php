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
        $scene3 = Scene::create(['title' => 'The River', 'description' => 'You reach a fast-flowing river trough a forest.']);
        $scene4 = Scene::create(['title' => 'The forest', 'description' => 'You go into the forest and feel the sudden urge that this is not gonna lead anywhere and u should turn back.']);
        $scene5 = Scene::create(['title' => 'LOST', 'description' => 'After everything inside ur body screaming to go back to the river u still ignored it and kept going forward and when it eventualy started to get dark as night falls u realised ur lost. GAME OVER!']);
        $scene6 = Scene::create(['title' => 'the grasslands', 'description' => 'after a while the river leads u to the end of the forest it seems and u find ur self in an big open grassland.']);


        Choice::create(['scene_id' => $scene1->id, 'text' => 'Enter the cave', 'next_scene_id' => $scene2->id]);
        Choice::create(['scene_id' => $scene1->id, 'text' => 'Walk to the river', 'next_scene_id' => $scene3->id]);
        Choice::create(['scene_id' => $scene2->id, 'text' => 'This part is still being worked', 'next_scene_id' => $scene1->id]);
        Choice::create(['scene_id' => $scene3->id, 'text' => 'Go into the forest', 'next_scene_id' => $scene4->id]);
        Choice::create(['scene_id' => $scene3->id, 'text' => 'Follow the river', 'next_scene_id' => $scene6->id]);
        Choice::create(['scene_id' => $scene4->id, 'text' => 'Turn back to the river', 'next_scene_id' => $scene3->id]);
        Choice::create(['scene_id' => $scene4->id, 'text' => 'Go deeper into the forest anyway and ignore the urge', 'next_scene_id' => $scene5->id]);
        Choice::create(['scene_id' => $scene6->id, 'text' => 'This part is still being worked', 'next_scene_id' => $scene1->id]);

        Hint::create(['scene_id' => $scene1->id, 'hint' => 'It might be safer to explore the river first.']);
        Hint::create(['scene_id' => $scene3->id, 'hint' => 'It might be safer to follow the river at least u wont get lost that way.']);
        Hint::create(['scene_id' => $scene4->id, 'hint' => 'Trust me on this one mate, please just listen to ur urges. Other wise u might get lost.']);
        Hint::create(['scene_id' => $scene5->id, 'hint' => 'Welp dont say I did not warn u, hate to say it, but told you so :).']);
    }
}
