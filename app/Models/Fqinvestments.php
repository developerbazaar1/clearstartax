<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fqinvestments extends Model
{
    protected $table='fq_investments';
    protected $primaryKey='id';
    protected $fillable=['Type_of_investment', 'Company_name', 'Current_value', 'Balance', 'Payment', 'fq_id'];
}
