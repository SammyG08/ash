<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('agrifood', function (Blueprint $table) {
            $table->id();
            $table->text('surname')->nullable(false);
            $table->text('other_names')->nullable(false);
            $table->integer('age')->nullable(false);
            $table->text('gender')->nullable(false);
            $table->integer('whatsapp_number');
            $table->text('email')->unique()->nullable(false);
            $table->text('residential_address')->nullable(false);
            $table->text('occupation')->nullable(false);
            $table->text('business_name')->nullable(false);
            $table->text('work_location')->nullable(false);
            $table->text('type_of_business')->nullable(false);
            $table->text('nature_of_business')->nullable(false);
            $table->text('business_sector')->nullable(false);
            $table->integer('num_of_years_worked_in_business')->nullable(false);
            $table->text('do_you_have_employees')->nullable(false);
            $table->integer('num_of_employees')->default(0);
            $table->text('do_you_plan_on_expansion')->nullable(false);
            $table->text('what_support_or_assistance_needed_to_support_this_expansion')->nullable();
            $table->integer('agrifood_program_rating')->default(5);
            $table->text('recommendation_for_improving_program')->nullable();



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agrifood');
    }
};
