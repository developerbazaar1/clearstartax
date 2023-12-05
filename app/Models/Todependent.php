<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todependent  extends Model
{
    protected $table='to_dependent';
    protected $primaryKey='id';
    protected $fillable=['to_id','Name', 'Date_Of_Birth', 'SSN', 'Relationship', 'Upload_Birth_Certificate_or_SSN_Card', 'Upload_School_records_or_write_a_letter_if_not_in_school', ];
}

