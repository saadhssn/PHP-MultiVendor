<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRecords = [
            [ 'id'=>1, 'name'=>'Super Admin', 'type'=>'superadmin', 'vendor_id'=>0, 'mobile'=>'0330-2838871', 'email'=>'saadh7010@gmail.com', 'password'=>'$2y$10$1ImVKbfCMPivSSIifLYg8u.PQD9WqyucH7a9FcZf7yXGlgBd7Gnu6', 'image'=>'', 'status'=>1]
        ];
        Admin::insert($adminRecords);
    }
}
