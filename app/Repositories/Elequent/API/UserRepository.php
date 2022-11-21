<?php
namespace App\Repositories\Eloquent\API;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserRepository extends BaseRepository
{

    protected $user;

    public function __construct()
    {
        $this->user = new User();
    }
}
