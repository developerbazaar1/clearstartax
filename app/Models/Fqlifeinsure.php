<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fqlifeinsure extends Model
{
    protected $table='fq_lifeinsure';
    protected $primaryKey='id';
    protected $fillable=['Policy_number', 'Owner_of_policy', 'Current_cash_value', 'Outstanding_loan_balance', 'policy_document', 'fq_id'];
}
