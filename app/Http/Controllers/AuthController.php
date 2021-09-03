<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return
        [
            "NIS" => 3103119199,
            "Name" => "Yuskiah Azizah Pangestu",
            "Phone" => 6281391522921,
            "Class" => "XII RPL 6"
        ];
    }
}