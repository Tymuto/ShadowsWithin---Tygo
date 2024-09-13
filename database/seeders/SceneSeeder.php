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
        $scene1 = Scene::create(['title' => 'The Beginning', 'description' => 'You wake up in a mysterious forest. U look around to try take in ur suroundings, it seems like ur next to a river and a big cave that seems to lead trough a mountain. U should go explore and try to find a way back to a town.']);
        $scene2 = Scene::create(['title' => 'The Cave', 'description' => 'You enter a dark cave U its pitch dark outside of the area thats illuminated by a torch.']);
        $scene3 = Scene::create(['title' => 'The River', 'description' => 'You reach a fast-flowing river trough a forest.']);
        $scene4 = Scene::create(['title' => 'The forest', 'description' => 'You go into the forest and feel the sudden urge that this is not gonna lead anywhere and u should turn back.']);
        $scene5 = Scene::create(['title' => 'LOST', 'description' => 'After everything inside ur body screaming to go back to the river u still ignored it and kept going forward and when it eventualy started to get dark as night falls u realised ur lost. GAME OVER!']);
        $scene6 = Scene::create(['title' => 'the grasslands', 'description' => 'after a while the river leads u to the end of the forest it seems and u find ur self in an big open grassland.']);
        $scene7 = Scene::create(['title' => 'The two paths', 'description' => 'You went deeper into the cave and u find 2 paths the one on the right has a green arrow pointing to it. The one on the left has a red arrow pointing to it which weirdly looks like its made out of blood.']);
        $scene8 = Scene::create(['title' => 'The grasslands', 'description' => 'You have been walking trough the cave what feels like an hour and at last the cave opens up and u see natural light coming trough an opening, when u walk trough it u see it opens up to a huge grassland.']);
        $scene9 = Scene::create(['title' => 'The shadow figure', 'description' => 'You have been walking trough this cave for what seems like an hour, while exploring the cave u kept hearing strange sounds asif somethings following u. U look around to see where its coming from and for a split second u saw a shadowy figure it looked humanoid but it was way to tall for a normal human.']);

        Choice::create(['scene_id' => $scene1->id, 'text' => 'Enter the cave', 'next_scene_id' => $scene2->id]);
        Choice::create(['scene_id' => $scene1->id, 'text' => 'Walk to the river', 'next_scene_id' => $scene3->id]);
        Choice::create(['scene_id' => $scene2->id, 'text' => 'Grab the torch and go further into the cave', 'next_scene_id' => $scene7->id]);
        Choice::create(['scene_id' => $scene3->id, 'text' => 'Go into the forest', 'next_scene_id' => $scene4->id]);
        Choice::create(['scene_id' => $scene3->id, 'text' => 'Follow the river', 'next_scene_id' => $scene6->id]);
        Choice::create(['scene_id' => $scene4->id, 'text' => 'Turn back to the river', 'next_scene_id' => $scene3->id]);
        Choice::create(['scene_id' => $scene4->id, 'text' => 'Go deeper into the forest anyway and ignore the urge', 'next_scene_id' => $scene5->id]);
        Choice::create(['scene_id' => $scene5->id, 'text' => 'Start over', 'next_scene_id' => $scene1->id]);
        Choice::create(['scene_id' => $scene6->id, 'text' => 'This part is still being worked on', 'next_scene_id' => $scene1->id]);
        Choice::create(['scene_id' => $scene7->id, 'text' => 'Follow the blood red arrow', 'next_scene_id' => $scene8->id]);
        Choice::create(['scene_id' => $scene7->id, 'text' => 'Follow the green arrow', 'next_scene_id' => $scene9->id]);
        Choice::create(['scene_id' => $scene8->id, 'text' => 'This part is still being worked on', 'next_scene_id' => $scene1->id]);
        Choice::create(['scene_id' => $scene9->id, 'text' => 'This part is still being worked on', 'next_scene_id' => $scene1->id]);

        Hint::create(['scene_id' => $scene1->id, 'hint' => 'It might be safer to explore the river first.']);
        Hint::create(['scene_id' => $scene3->id, 'hint' => 'It might be safer to follow the river at least u wont get lost that way.']);
        Hint::create(['scene_id' => $scene4->id, 'hint' => 'Trust me on this one mate, please just listen to ur urges. Other wise u might get lost.']);
        Hint::create(['scene_id' => $scene5->id, 'hint' => 'Welp dont say I did not warn u, hate to say it, but told you so :).']);
    }
}
