<?php
/**
 * Created by PhpStorm.
 * User: Sherlock Holmes
 * Date: 4/26/2018
 * Time: 6:30 PM
 */

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;

class MyController
{
    function postData(Request $request){
        $test_name= $request['test_name'];
        $user = new User();
        $user->testdata=$test_name;

        $user->save();

        return redirect()->back();

    }
}