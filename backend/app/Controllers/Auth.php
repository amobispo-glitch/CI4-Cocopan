<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UsersModel;


class Auth extends BaseController
{
        public function login() 
        {
            $session = session();   
            $request = service('request');

            $validation = \Config\Services::validation();
            // Variable comes from the html the id from the input
            // Format: variable, human readable name, rules seperated by |
            // So this following rule means variable email is Email which means it should not be null and has valid email format
            $validation->setRule('email', 'Email', 'required|valid_email');
            // The following rule means variable password, ma,ed Password and it should not be null
            $validation->setRule('password', 'Password', 'required');
            $post = $request->getPost();

            if (! $validation->run($post)) 
            {
                $session->setFlashdata('errors', $validation->getErrors());
                $session->setFlashdata('old', $post);
                return redirect()->back()->withInput();
            }
             

            $email = $request->getPost('email');

            $userModel = new UsersModel();
            $user = $userModel->where('email', $email)->first();

            if (! $user) 
            {
                $session->setFlashdata('errors', ['email' => 'No account found for that email']);
                $session->setFlashdata('old', ['email' => $email]);
                return redirect()->back()->withInput();
            }

            

            $userArr = is_array($user) ? $user : (method_exists($user, 'toArray') ? $user->toArray() : (array) $user);

            if (! password_verify($request->getPost('password'), $userArr['password'] ?? '')) 
            {
                $session->setFlashdata('errors', ['password' => 'Incorrect password']);
                $session->setFlashdata('old', ['email' => $email]);
                return redirect()->back()->withInput();
            }

            $session->set([
                'id' => $userArr['id'] ?? null,
                'email' => $userArr['email'] ?? null,
                'display_name' => ($userArr['name'] ?? ''),
            ]);

            $type = strtolower($userArr['type'] ?? 'client');
                if ($type === 'manager') 
                {
                    return redirect()->route('/');
                }

                if ($type === 'client') 
                {
                    return redirect()->to('/');
                }
        }

        public function logout() 
        {
            session()->destroy();

            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 3600, $params['path'] ?? '/', $params['domain'] ?? '', isset($_SERVER['HTTPS']), true);
            return redirect()->to('/');
        }

        public function register()
        {
            $session = session();   
            $request = service('request');
            

             $validation = \Config\Services::validation();
            // Variable comes from the html the id from the input
            // Format: variable, human readable name, rules seperated by |
            // So this following rule means variable email is Email which means it should not be null and has valid email format
            $validation->setRule('email', 'Email', 'required|valid_email');
            // The following rule means variable password, ma,ed Password and it should not be null
            $validation->setRule('password', 'Password', 'required');
            $post = $request->getPost();

            if (! $validation->run($post)) 
            {
                $session->setFlashdata('errors', $validation->getErrors());
                $session->setFlashdata('old', $post);
                return redirect()->back()->withInput();
            }

            $userModel = new UsersModel();
            if($post['password'] !== $post['confirm_password']) 
            {
                $session->setFlashdata('errors', ['password' => 'Password and Confirm Password do not match']);
                $session->setFlashdata('old', ['email' => $post['email']]);
                return redirect()->back()->withInput();
            }


            // This should be based on data from database table
            // Make sure that required datas are specified while some should be expecting null so have catcher for it
            $data = [
                'name' => $post['name'],
                'email' => $post['email'],
                'password' => password_hash($post['password'], PASSWORD_DEFAULT),
            ];

            $inserted = $userModel->insert($data);
            return redirect()->to('/');

            
        }
}
