<?php

use Illuminate\Database\Seeder;

class DevelopmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if('production' == app()->environment()) {
        	return;
        }

        $this->seedUsers();
        $this->seedProfiles();
    }

    private function seedUsers()
    {
    	\App\User::where('id', '>', 0)->delete();
    	factory(\App\User::class, 100)->create();
    }

    private function seedProfiles()
    {
    	\App\User::get()->each(function($user) {
    		factory(\App\Profile::class)->create(['user_id' => $user->id]);
    	});
    }
}
