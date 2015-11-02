<?php

use App\Role;
use App\Visit;
use App\Note;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(MemberSeeder::class);
	    $this->call(CompanionshipSeeder::class);

	    // roles table

	    Role::create([ 'id' =>  '1', 'description' =>  'President']);
	    Role::create([ 'id' =>  '2', 'description' =>  'Counselor 1']);
	    Role::create([ 'id' =>  '3', 'description' =>  'Counselor 2']);
	    Role::create([ 'id' =>  '4', 'description' =>  'Secretary']);
	    Role::create([ 'id' =>  '5', 'description' =>  'Secretary Assistent']);
	    Role::create([ 'id' =>  '6', 'description' =>  'Elder']);
	    Role::create([ 'id' =>  '7', 'description' =>  'Family']);


	    // Visits table

	    Visit::create([
		    'member_id' => '1',
		    'visited_id'    =>  '3',
		    'month'         =>  'May',
		    'day'           =>  '5',
		    'time'          =>  '7:00 pm'
	    ]);

	    Visit::create([
		    'member_id' => '1',
		    'visited_id'    =>  '4',
		    'month'         =>  'May',
		    'day'           =>  '7',
		    'time'          =>  '5:00 pm'
	    ]);

	    Visit::create([
		    'member_id' => '3',
		    'visited_id'    =>  '5',
		    'month'         =>  'June',
		    'day'           =>  '17',
		    'time'          =>  '6:00 pm'
	    ]);

	    // Notes table

	    Note::create([
		    'member_id' =>  '1',
		    'body'      =>  'This is note 1',
		    'recipient_id'    =>  '3'
	    ]);
	    Note::create([
		    'member_id' =>  '1',
		    'body'      =>  'This is note 2',
		    'recipient_id'    =>  '4'
	    ]);

	    Note::create([
		    'member_id' =>  '2',
		    'body'      =>  'This is note 3',
		    'recipient_id'    =>  '4'
	    ]);


        Model::reguard();
    }
}
