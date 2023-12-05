<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fqbankaccount extends Model
{
    protected $table='fq_bankaccount';
    protected $primaryKey='id';
    protected $fillable=['bank', 'fq_id'];
}
