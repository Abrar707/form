<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Abrar extends Model
{
    use HasFactory;
    use softdeletes;
    protected $table='abrars';
    protected $primaryKey='id';
    //Mutater set atribute-name attribute
    public function setnameattribute($value){
        $this->attributes['name']=ucwords($value);
    }
    // public function setuniattribute($value){
    //     $this->attribute['uni']=\ucwords($value);
    // }



}
