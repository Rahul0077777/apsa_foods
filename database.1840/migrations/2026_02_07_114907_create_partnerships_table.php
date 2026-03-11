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
       Schema::create('partnerships', function (Blueprint $table) {
            $table->id();

            // Business Details
            $table->string('business_name');
            $table->string('contact_person');
            $table->string('mobile', 20);
            $table->string('email');
            $table->string('city_state');

            // Partnership
            $table->json('partnership_type');

            // Business Profile
            $table->string('years_in_business')->nullable();
            $table->string('categories_handled')->nullable();
            $table->string('area_of_operation')->nullable();

            // Infrastructure
            $table->string('storage_facility')->nullable();
            $table->string('delivery_setup')->nullable();
            $table->string('sales_team_strength')->nullable();

            // Commercial
            $table->string('expected_volume')->nullable();
            $table->json('preferred_products')->nullable();

            // Message
            $table->text('message')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       Schema::dropIfExists('partnerships');
    }
};
