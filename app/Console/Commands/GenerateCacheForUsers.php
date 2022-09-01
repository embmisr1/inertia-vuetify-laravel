<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Models\USER_ACCESS\UsersAccess;
use App\Models\USER_ACCESS\UsersAccessRole;
use Illuminate\Console\Command;

class GenerateCacheForUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cache:access';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generating cached file for user roles';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        UsersAccess::all()->each(function ($user_access) {
            $this->info("generating for user" . $user_access->users_FK);
            $roles = UsersAccessRole::find(json_decode($user_access->access_role_assigned, true));

            cache(['access_user_id' . $user_access->users_FK => $roles->pluck("access_role")]);
        });
    }
}
