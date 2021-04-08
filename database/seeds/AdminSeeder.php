<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->insert([
            [
                'username' => 'admin',
                'password' => '$2y$10$wK7FJ4lSL9hbiGCSQluTmewT1Av2DnRNZCulbz.qwh7vX4rbIoCbO',
                
            ],
            [
                'username' => 'hengki',
                'password' => '$2y$10$wK7FJ4lSL9hbiGCSQluTmewT1Av2DnRNZCulbz.qwh7vX4rbIoCbO',
                
            ],
        
    ]);
    }
}
