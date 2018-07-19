<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $userList = array(
            array('Jasper Garcera', 'jasper@nogarulab.com'),
            array('Jesel Morga', 'jesel@nogarulab.com'),
            array('Joan Astronomo', 'joan@nogarulab.com'),
            array('Earl Empic', 'earl@nogarulab.com'),
            array('Archie Binamira', 'archie@nogarulab.com'),
        );
        foreach($userList as $data){
            $user = new User();
            $user->name = $data[0];
            $user->email = $data[1];
            $user->password = bcrypt('nogarudev');
            $user->save();
        }
    }
}
