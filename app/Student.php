<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'student';
    protected $fillable = ['name', 'school', 'email', 'phone', 'grade', 'department'];

    public function getGambar()
    {
        if(!$this->gambar){
            return asset('images/default.jpg');
        }
        return asset('images/'.$this->gambar);
    }
}
