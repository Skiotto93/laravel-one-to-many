<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        Project::truncate();
        for($i = 0; $i < 5; $i++) {

            $new_project = new Project();
    
            $new_project->name = $faker->sentence(2);
            $new_project->description = $faker->text(1000);
            $new_project->name_client = $faker->sentence();
            $new_project->slug = Str::slug($new_project->name, '-');
    
            $new_project->save();
        }
    }
}
