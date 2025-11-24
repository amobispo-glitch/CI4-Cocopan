<?php
namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
        

        public function run()
        {
            $now = date('Y-m-d H:i:s');
        // if you want password that is hashed
        $password = password_hash('Password123!', PASSWORD_DEFAULT);
            // no need to add id since its auto increment
            $dataYouWannaInsert = [
                [
                    'name' => 'Allejandro Danyael M. Obispo',
                    'email' => 'sql@gmail.com',
                    'password' => $password,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],

                [
                    'name' => 'Allejandro Danyael M. Obispo',
                    'email' => 'sql@gmail.com',
                    'password' => $password,
                    'created_at' => $now,
                    'updated_at' => $now,
                ],
                
            ];

            $this->db->table('usertable')->insertBatch($dataYouWannaInsert );
        }
    }
