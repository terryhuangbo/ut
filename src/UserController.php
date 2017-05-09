<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Retrieve the user for the given ID.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(Request $request,$id)
    {
        $ret = $request->user();
        dd($ret);
        return $id;
//        return User::findOrFail($id);
    }
}
