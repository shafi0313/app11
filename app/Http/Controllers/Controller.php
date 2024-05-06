<?php

namespace App\Http\Controllers;

abstract class Controller
{
    protected function authorize(
        $permission,
        $error_message = 'Don\'t have permission to perform this action',
    ) {
        if (! user()->can($permission)) {
            return redirect()->back()->withInput()->withErrors($error_message);
        }
    }
}
