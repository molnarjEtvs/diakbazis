<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BeszeltNyelv extends Model
{
    public $table = "diak_beszelt_nyelvek";
    public $primaryKey = "dbny_id";
    public $timestamps = false;
}
