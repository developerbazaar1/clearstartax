<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fqpersonal extends Model
{
    protected $table='fq_personal';
    protected $primaryKey='id';
    protected $fillable=['Description_of_asset', 'Date_of_purchase', 'Current_value', 'Loan_balance', 'Name_of_lender', 'Date_of_final_payment', 'fq_id'];
}
