<?php

use Illuminate\Database\Seeder;
use App\Users;
use App\Creds;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('creds')->delete();
        DB::table('users')->delete();
        $user = Users::create([
          'fName' => 'Name',
          'lName' => 'One',
          'email' => 'sample@s.com'
        ]);
        $user->hasCred()->create([
          'passwd' => Hash::make('passwd1')
        ]);
        $user = Users::create([
          'fName' => 'Name',
          'lName' => 'Two',
          'email' => 'sample@s.com'
        ]);
        $user->hasCred()->create([
          'passwd' => Hash::make('passwd2')
        ]);
    }
}
