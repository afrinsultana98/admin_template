<?php

use App\Models\ApplicationSetting;
use App\Models\User;

function generalSettings(){
    $application = ApplicationSetting::latest()->first();
    return $application;
}

function user($id)
{
    $users = User::auth()->user();
    return $users;
}