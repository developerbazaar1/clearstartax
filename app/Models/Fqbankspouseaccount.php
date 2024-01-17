<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fqbankspouseaccount extends Model
{
    protected $table='fq_bankspouseaccount';
    protected $primaryKey='id';
    protected $fillable=['bankspouse', 'fq_id'];
}
