<?php

use Illuminate\Database\Seeder;

class PlansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plans')->insert([
            'name' => "Basic",
            'slug' => "basic",
            'stripe_plan' => "Basic",
            'cost' => 30.0,
            'plan_id' => 'plan_HC069PuZYLU8fU',
        ]);
        DB::table('plans')->insert([
            'name' => "Professional",
            'slug' => "professional",
            'stripe_plan' => "Professional",
            'cost' => 50.0,
            'plan_id' => 'plan_HC4fUEIRcB9fxD',
        ]);
    }
}
