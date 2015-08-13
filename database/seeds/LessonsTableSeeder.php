// /database/migrations/seeds/LessonsTableSeeder.php
<?php
 
use Illuminate\Database\Seeder;
 
class LessonsTableSeeder extends Seeder {
 
    public function run()
    {
        // Uncomment the below to wipe the table clean before populating
        DB::table('lessons')->delete();
 
        $lessons = array(
            ['id' => 1, 'name' => 'Lesson 1', 'slug' => 'lesson-1', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 2, 'name' => 'Lesson 2', 'slug' => 'lesson-2', 'created_at' => new DateTime, 'updated_at' => new DateTime],
            ['id' => 3, 'name' => 'Lesson 3', 'slug' => 'lesson-3', 'created_at' => new DateTime, 'updated_at' => new DateTime],
        );
 
        // Uncomment the below to run the seeder
        DB::table('lessons')->insert($lessons);
    }
 
}
 
// /database/migrations/seeds/TasksTableSeeder.php