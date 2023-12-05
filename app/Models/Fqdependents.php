<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fqdependents extends Model
{
    protected $table='fq_dependent';
    protected $primaryKey='id';
    protected $fillable=['Name', 'Date_Of_Birth', 'SSN', 'Relationship', 'fq_id'];
}
