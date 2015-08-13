<?php
 
use Illuminate\Database\Seeder;
 
class AssignmentsTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('assignments')->delete();
 
        $assignments = array(
            ['id' => 1, 'name' => 'Assignment 1', 'slug' => 'assignment-1', 'lesson_id' => 1, 'completed' => false, 'description' => 'My first assignment', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'Assignment 2', 'slug' => 'assignment-2', 'lesson_id' => 1, 'completed' => false, 'description' => 'My first assignment', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => 'Assignment 3', 'slug' => 'assignment-3', 'lesson_id' => 1, 'completed' => false, 'description' => 'My first assignment', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 4, 'name' => 'Assignment 4', 'slug' => 'assignment-4', 'lesson_id' => 1, 'completed' => true, 'description' => 'My second assignment', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 5, 'name' => 'Assignment 5', 'slug' => 'assignment-5', 'lesson_id' => 1, 'completed' => true, 'description' => 'My third assignment', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 6, 'name' => 'Assignment 6', 'slug' => 'assignment-6', 'lesson_id' => 2, 'completed' => true, 'description' => 'My fourth assignment', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 7, 'name' => 'Assignment 7', 'slug' => 'assignment-7', 'lesson_id' => 2, 'completed' => false, 'description' => 'My fifth assignment', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );
 
        //// Uncomment the below to run the seeder
        DB::table('assignments')->insert($assignments);
    }
 
}