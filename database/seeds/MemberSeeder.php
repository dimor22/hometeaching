<?php

use App\Member;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    // clear our database ------------------------------------
	    DB::table('members')->delete();

	    // seed members table -------------------------------------

	    // comp 1

	    Member::create([
		    'role'  =>  '1',
		    'fname' =>  'Pepillo',
		    'lname' =>  'Mondero',
		    'phone' =>  '7023456754',
		    'email' =>  'pepillo@gmail.com',
		    'pwd'   =>  Hash::make(Hash::make('123')),
		    'street'   => '234 Silver Street',
		    'apartment_number'  =>  '107',
		    'city'      =>  'Las Vegas',
		    'zip'       =>  '89103',
		    'state'     =>  'NV',
		    'photo' =>  'pp1.jpg',
		    'gender'    => 'M',
		    'has_companion'  =>  1,
		    'companionship_id'   =>  1,
		    'visited_by'   =>  3
	    ]);

	    // comp 2

	    Member::create([
		    'fname' =>  'Mariano',
		    'lname' =>  'Perez',
		    'phone' =>  '7023456754',
		    'email' =>  'mariano@gmail.com',
		    'pwd'   =>  Hash::make(Hash::make('123')),
		    'role'  =>  '2',
		    'street'   => '777 Gold Street',
		    'city'      =>  'Las Vegas',
		    'zip'       =>  '89103',
		    'state'     =>  'NV',
		    'photo' =>  'pp2.jpg',
		    'gender'    => 'M',
		    'has_companion'  =>  1,
		    'companionship_id'   =>  1,
		    'visited_by'   =>  3
	    ]);

	    // comp 3

	    Member::create([
		    'fname' =>  'David',
		    'lname' =>  'Gamez',
		    'phone' =>  '7023456754',
		    'email' =>  'david@gmail.com',
		    'pwd'   =>  Hash::make(Hash::make('123')),
		    'role'  =>  '3',
		    'street'   => '123 Ostras Street',
		    'apartment_number'  =>  '158',
		    'city'      =>  'Reno',
		    'zip'       =>  '89103',
		    'state'     =>  'NV',
		    'photo' =>  'pp3.jpg',
		    'gender'    => 'M',
		    'has_companion'  =>  1,
		    'companionship_id'   =>  2,
		    'visited_by'   =>  2
	    ]);

	    // comp 4

	    Member::create([
		    'fname' =>  'Felipe',
		    'lname' =>  'Artos',
		    'phone' =>  '7023456754',
		    'email' =>  'flipe@gmail.com',
		    'pwd'   =>  Hash::make('123'),
		    'role'  =>  '6',
		    'street'   => '444 Arena Street',
		    'city'      =>  'Reno',
		    'zip'       =>  '89103',
		    'state'     =>  'NV',
		    'photo' =>  'pp4.jpg',
		    'gender'    => 'M',
		    'has_companion'  =>  1,
		    'companionship_id'   =>  2,
		    'visited_by'   =>  2
	    ]);

	    // comp 5

	    Member::create([
		    'fname' =>  'Filemon',
		    'lname' =>  'Mondero',
		    'phone' =>  '7023456754',
		    'email' =>  'filemon@gmail.com',
		    'pwd'   =>  Hash::make('123'),
		    'role'  =>  '6',
		    'street'   => '323 Luna Street',
		    'city'      =>  'Reno',
		    'zip'       =>  '89103',
		    'state'     =>  'NV',
		    'photo' =>  'pp5.jpg',
		    'gender'    => 'M',
		    'has_companion'  =>  1,
		    'companionship_id'   =>  3,
		    'visited_by'   =>  1
	    ]);

	    // comp 6

	    Member::create([
		    'fname' =>  'Arnaldo',
		    'lname' =>  'Paleto',
		    'phone' =>  '7023456754',
		    'email' =>  'arnaldo@gmail.com',
		    'pwd'   =>  Hash::make('123'),
		    'role'  =>  '6',
		    'street'   => '444 Sol Street',
		    'apartment_number'  =>  '1070',
		    'city'      =>  'Reno',
		    'zip'       =>  '89103',
		    'state'     =>  'NV',
		    'photo' =>  'pp6.jpg',
		    'gender'    => 'M',
		    'has_companion'  =>  1,
		    'companionship_id'   =>  3,
		    'visited_by'   =>  1
	    ]);


	    // comp 7

	    Member::create([
		    'fname' =>  'Marco',
		    'lname' =>  'Polo',
		    'phone' =>  '7023456754',
		    'email' =>  'marco@gmail.com',
		    'pwd'   =>  Hash::make('123'),
		    'role'  =>  '6',
		    'street'   => '1422 Mar Street',
		    'city'      =>  'Reno',
		    'zip'       =>  '89103',
		    'state'     =>  'NV',
		    'photo' =>  'pp7.jpg',
		    'gender'    => 'M',
		    'has_companion'  =>  0,
		    'companionship_id'   =>  0,
		    'visited_by'   =>  0
	    ]);

	    // comp 8

	    Member::create([
		    'fname' =>  'Antonio',
		    'lname' =>  'Orozco',
		    'phone' =>  '7023456754',
		    'email' =>  'antonio@gmail.com',
		    'pwd'   =>  Hash::make('123'),
		    'role'  =>  '6',
		    'street'   => '776 Rio Street',
		    'city'      =>  'Las Vegas',
		    'zip'       =>  '89103',
		    'state'     =>  'NV',
		    'photo' =>  'pp8.jpg',
		    'gender'    => 'M',
		    'has_companion'  =>  0,
		    'companionship_id'   =>  0,
		    'visited_by'   =>  0
	    ]);

	    // comp 9

	    Member::create([
		    'fname' =>  'Antonio',
		    'lname' =>  'Orozco',
		    'phone' =>  '7023456754',
		    'email' =>  'antonio@gmail.com',
		    'pwd'   =>  Hash::make('123'),
		    'role'  =>  '6',
		    'street'   => '776 Rio Street',
		    'city'      =>  'Las Vegas',
		    'zip'       =>  '89103',
		    'state'     =>  'NV',
		    'photo' =>  'empty.jpg',
		    'gender'    => 'M',
		    'has_companion'  =>  0,
		    'companionship_id'   =>  0,
		    'visited_by'   =>  0
	    ]);

	    $this->command->info('Members are created!');

    }
}
