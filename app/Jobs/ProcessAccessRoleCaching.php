<?php

namespace App\Jobs;

use App\Models\User;
use App\Models\USER_ACCESS\UsersAccessRole;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class ProcessAccessRoleCaching implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $user;
    private $assigned_roles;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(User $user, $assigned_roles = array())
    {
        $this->user = $user->withoutRelations();
        $this->assigned_roles = $assigned_roles;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $role_names = UsersAccessRole::find(json_encode($this->assigned_roles, true))->pluck("access_role");;
        cache(['access_user_id' . $this->user->id => $role_names]);

    }
}
