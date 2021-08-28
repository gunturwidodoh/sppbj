<?php

class Login_model extends CI_model
{
    public function rules()
    {
        return
            [
                [
                    'field' => 'username',
                    'label' => 'Username',
                    'rules' => 'trim|required'
                ],

                [
                    'field' => 'password',
                    'label' => 'Password',
                    'rules' => 'trim|required'
                ]
            ];
    }
}
