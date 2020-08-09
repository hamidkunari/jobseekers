<?php

use Illuminate\Database\Seeder;
use App\Category;
use App\User;
use App\Role;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Category::truncate();
    	factory('App\User',1)->create();
    	factory('App\Company',1)->create();
    	factory('App\Job',1)->create();

        $categories = [

            'Technology',
            'Engineering',
            'Government',
            'Medical',
            'Construction',
            'Software'

        ];
        foreach($categories as $category){
            Category::create(['name'=>$category]);
        }

        Role::truncate();
        $adminRole = Role::create(['name'=>'admin']);

        $admin = User::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('password123'),
            'email_verified_at'=>NOW()
        ]);

        $admin->roles()->attach($adminRole);







       }
}
