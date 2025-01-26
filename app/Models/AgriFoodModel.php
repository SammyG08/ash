<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AgriFoodModel extends Model
{
    protected $table = 'agrifood';

    protected $fillable = [
        'surname',
        'other_names',
        'age',
        'gender',
        'whatsapp_number',
        'email',
        'residential_address',
        'occupation',
        'business_name',
        'work_location',
        'type_of_business',
        'nature_of_business',
        'business_sector',
        'num_of_years_worked_in_business',
        'do_you_have_employees',
        'num_of_employees',
        'do_you_plan_on_expansion',
        'what_support_or_assistance_needed_to_support_this_expansion',
        'agrifood_program_rating',
        'recommendation_for_improving_program',
    ];
}
