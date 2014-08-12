<?php

class UserTableSeeder extends Seeder {

    public function run()
    {
        User::create(array('password' => Hash::make('wo94yun'), 'username' => 'chaos', 'is_admin' => 'true'));
    }

}