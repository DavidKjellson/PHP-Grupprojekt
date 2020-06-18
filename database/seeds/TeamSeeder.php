<?php

// InternetsTableSeeder.php

use Illuminate\Database\Seeder;
use App\Team;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 15;
        factory(Team::class, $count)->create();
    }
}
