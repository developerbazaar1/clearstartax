<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fqvehical extends Model
{
    protected $table='fq_vehical';
    protected $primaryKey='id';
    protected $fillable=['Make_and_model', 'Year', 'Mileage', 'Lease_or_own', 'Date_of_purchased', 'Date_of_final_payment', 'Current_value', 'Current_loan_value', 'Monthly_payment', 'Name_of_lender', 'Is_vehicle_1_financed_or_leased', 'vehicleup', 'fq_id'];
}
