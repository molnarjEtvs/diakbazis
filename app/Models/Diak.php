<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diak extends Model
{
    public $table = "diakok";
    public $primaryKey = "d_id";

    public function nyelvek(){
        $y = $this->belongsToMany(Nyelv::class,'diak_beszelt_nyelvek','d_id','ny_id');
        return $y;
    }
}
