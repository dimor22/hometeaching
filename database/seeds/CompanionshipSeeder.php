<?php

use App\Companionship;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CompanionshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
	    // clear our database ------------------------------------
	    DB::table('companionships')->delete();


	    // seed companionships table -----------------------------

	    Companionship::create([
		    'comp1' =>  1,
		    'comp2' =>  2,
	    ]);
	    Companionship::create([
		    'comp1' =>  3,
		    'comp2' =>  4,
	    ]);
	    Companionship::create([
		    'comp1' =>  5,
		    'comp2' =>  6,
	    ]);

	    $this->command->info('Companionships are created!');
    }
}
