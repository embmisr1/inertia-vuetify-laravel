<?php

namespace App\Service;

use App\Models\User;


class UserService
{

    protected $logged_user;
    protected $logged_user_id;
    protected $logged_user_roles;

    public function __construct()
    {
        $this->logged_user = auth()->user();
        $this->logged_user_id = auth()->id();
    }

    private function getUser()
    {
        try {
            $user = User::find($this->logged_user_id);

            return $user;
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function list_user_roles(): array
    {
        return json_decode($this->getUser()->access->access_role_assigned, true);
    }

    public function verify_user_role(): bool
    {
        $user_roles = $this->list_user_roles();
        return in_array(1, $user_roles);
    }
}
