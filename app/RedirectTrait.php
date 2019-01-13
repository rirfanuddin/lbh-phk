<?php

namespace App\Http;   // Or the place where the trait is stored (step 2)

use Illuminate\Http\Request;

trait RedirectTrait
{
    /**
     * Where to redirect users after register/login/reset based in roles.
     *
     * @param \Iluminate\Http\Request  $request
     * @param mixed $user
     * @return mixed
     */
    public function RedirectBasedInRole(Request $request, $user) {

    $route = '';

    switch ($user->is_admin) {
        # User
        case '0':
            $route = '/home';  // the user's route
            break;
        # Admin
        case '1':
            $route = '/admin/home'; // the employee's route
            break;
        default: break;
    }

    return redirect()->intended($route);
    }

}