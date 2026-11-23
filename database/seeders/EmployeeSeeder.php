<?php 
 
namespace Database\Seeders; 
 
use Illuminate\Database\Console\Seeds\WithoutModelEvents; 
use Illuminate\Database\Seeder; 
use Illuminate\Support\Facades\DB; 
 
class EmployeeSeeder extends Seeder 
{ 
    /** 
     * Run the database seeds. 
     */ 
    public function run(): void 
    { 
        DB::table('employees')->insert([ 
            [ 
                'firstname' => 'Rahel', 
                'lastname' => 'Revina', 
                'email'=> 'rahelrevina240407@gmail.com', 
                'age' => 19, 
                'position_id' => 1 
            ], 
            [ 
                'firstname' => 'Abed', 
                'lastname' => 'Nego', 
                'email'=> 'abed.nego@gmail.com', 
                'age' => 23, 
                'position_id' => 2 
            ], 
            [ 
                'firstname' => 'Syalom', 
                'lastname' => 'Sion', 
                'email'=> 'syalomsions@gmail.com', 
                'age' => 25, 
                'position_id' => 3 
            ], 
        ]); 
    } 
} 