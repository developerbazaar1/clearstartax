<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    protected $table='status';
    protected $primaryKey='id';
    protected $fillable=['status', 'status_code', 'what_this_means', 'what_happens_next'];
}
