<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class StudentModel{
    public static function get_all(){
        $student = DB::table('student')->get();
        return $student;
    }

    public static function save($data){
        unset($data["_token"]);
        $new_item = DB::table('student')->insert($data);
        return $new_item;
    }
}