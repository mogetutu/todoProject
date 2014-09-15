<?php
class UserTableSeeder extends Seeder 
{
	public function run()
	{
       DB::table('users')->delete();
       User::create(array(
			'username' => 'luisa',
			'password' => Hash::make('awesome'),
		));
	}
}