<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
    {
        Schema::create('distributor_orders', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id')->nullable();

            $table->unsignedBigInteger('package_id');

            $table->string('name');
            $table->string('email');
            $table->string('phone');

            $table->text('notes')->nullable();

            $table->enum('status', ['pending','approved','rejected'])
                ->default('pending');

            $table->timestamps();

            $table->foreign('package_id')
                ->references('id')
                ->on('distributor_packages')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('distributor_orders');
    }
};
