<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fqestate extends Model
{
    protected $table='fq_estate';
    protected $primaryKey='id';
    protected $fillable=['Property_address', 'Country', 'Mortgage_lender', 'Purchase_date', 'Fair_market_value', 'Loan_balance', 'Monthly_payment', 'Date_of_final', 'Monthly_property_tax', 'How_is_title_held', 'property_document', 'fq_id'];
}
