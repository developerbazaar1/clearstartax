<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FqCreditcards extends Model
{
    protected $table='fq_creditcards';
    protected $primaryKey='id';
    protected $fillable=['Creditcards', 'fq_id'];
}
