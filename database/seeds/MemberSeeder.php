<?php

use Illuminate\Database\Seeder;
use App\Member;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = 100;
        factory(Member::class, $count)->create();
    }
}
