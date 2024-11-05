<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Project;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::create(['name' => 'project 1']);
        Project::create(['name' => 'project 2']);
        Project::create(['name' => 'project 3']);
        Project::create(['name' => 'project 4']);
        Project::create(['name' => 'project 5']);
    }
 
}
