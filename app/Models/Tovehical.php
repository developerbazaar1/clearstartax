<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tovehical extends Model
{
    protected $table='to_vehicle';
    protected $primaryKey='id';
    protected $fillable=['to_id','Description_of_vehicle', 'Is_the_vehicle_used_in_business_or_by_an_employee', 'Cost', 'Date_placed_in_service', 'Business_Miles', 'Commuting_miles', 'Other_personal_use_miles', 'total_miles_driven', 'Gas_oil_expenses', 'Repairs_Maintenance', 'Auto_insurance', 'Registration_licenses_and_fees', 'Other_auto_expenses', 'Auto_rentals', 'Is_another_car_available_for_person_use', 'Do_you_have_evidence_to_support_your_mileage_information', 'If_yes_is_the_evidence_written_in_a_log_or_another_place'];
}

