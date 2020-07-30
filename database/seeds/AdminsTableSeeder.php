<?php

use Illuminate\Database\Seeder;
use App\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Admin::create([
          'name'     => 'Admin Test',
          'email'    => 'test@test.jp',
          'password' => Hash::make('pass1234'),
      ]);

      for($i = 1; $i <= 10; $i++)
      {
          Admin::create([
              'name'     => 'Admin Test'. $i,
              'email'    => 'test'. $i. '@test.jp',
              'password' => Hash::make('pass1234'),
          ]);
        }
    }
}
