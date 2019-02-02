<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $count = (int)$this->command->ask('How many comments do you need ?', 10);
        $this->command->info("Creating {$count} comments.");
        factory(App\Comment::class, $count)->create();
        $this->command->info('Comments Created!');

    }
}
