<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Models\AgriFoodModel;

class AgriFoodImport implements ToCollection, WithHeadingRow
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {

            /**
             * added this line of code to prevent duplication in the database 
             * in the case where by the email in the excel sheet is already in the agrifood table,
             * what we do is we update that record in the table
             * @var mixed
             */
            $agriFood = AgriFoodModel::where('email', $row['email'])->first();
            if ($agriFood) {
                $agriFood->update([
                    'surname' => $row['surname'],
                    'other_names' => $row['other_names'],
                    'age' => $row['age'],
                    'gender' => $row['gender'],
                    'whatsapp_number' => $row['whatsapp_number'],
                    'residential_address' => $row['residential_address'],
                    'occupation' => $row['occupation'],
                    'business_name' => $row['business_name'],
                    'work_location' => $row['work_location'],
                    'type_of_business' => $row['type_of_business'],
                    'nature_of_business' => $row['nature_of_business'],
                    'business_sector' => $row['business_sector'],
                    'num_of_years_worked_in_business' => $row['num_of_years_worked_in_business'],
                    'do_you_have_employees' => $row['do_you_have_employees'],
                    'num_of_employees' => $row['num_of_employees'],
                    'do_you_plan_on_expansion' => $row['do_you_plan_on_expansion'],
                    'what_support_or_assistance_needed_to_support_this_expansion' => $row['what_support_or_assistance_do_you_need_to_support_this_expansion'],
                    'agrifood_program_rating' => $row['agrifood_program_rating'],
                    'recommendation_for_improving_program' => $row['recommendation_for_improving_program'],
                ]);
            } else {
                AgriFoodModel::create([
                    'surname' => $row['surname'],
                    'other_names' => $row['other_names'],
                    'age' => $row['age'],
                    'gender' => $row['gender'],
                    'whatsapp_number' => $row['whatsapp_number'],
                    'email' => $row['email'],
                    'residential_address' => $row['residential_address'],
                    'occupation' => $row['occupation'],
                    'business_name' => $row['business_name'],
                    'work_location' => $row['work_location'],
                    'type_of_business' => $row['type_of_business'],
                    'nature_of_business' => $row['nature_of_business'],
                    'business_sector' => $row['business_sector'],
                    'num_of_years_worked_in_business' => $row['num_of_years_worked_in_business'],
                    'do_you_have_employees' => $row['do_you_have_employees'],
                    'num_of_employees' => $row['num_of_employees'],
                    'do_you_plan_on_expansion' => $row['do_you_plan_on_expansion'],
                    'what_support_or_assistance_needed_to_support_this_expansion' => $row['what_support_or_assistance_do_you_need_to_support_this_expansion'],
                    'agrifood_program_rating' => $row['agrifood_program_rating'],
                    'recommendation_for_improving_program' => $row['recommendation_for_improving_program'],
                ]);
            }
        }
    }
}
