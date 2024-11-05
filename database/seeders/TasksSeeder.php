<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::create([ 'name' => 'task 1','priority' => 1,'project_id' => 1]);
        Task::create([ 'name' => 'task 2','priority' => 2,'project_id' => 2]);
        Task::create([ 'name' => 'task 3','priority' => 3,'project_id' => 3]);
    

    }
 
}
