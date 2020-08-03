<?php

namespace App\Repositories\UserProfile;

use App\Models\UserProfile;
use Main\Supports\Patterns\Abstracts\AppRepository as Repository;

class UserProfileRepository extends Repository implements UserProfileInterface
{
    public function __construct()
    {
        parent::__construct();
    }
    public function model()
    {
        return UserProfile::class;
    }

}