<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMonthlyInstallmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {			
        Schema::create('monthly_installments', function (Blueprint $table) {
            $table->id();
            $table->float('total_installment')->default(0);
            $table->date('from_date');
            $table->date('to_date');
            $table->unsignedInteger('total_month');
            $table->float('per_month_installment')->default(0);
            $table->unsignedInteger('from_month');
            $table->unsignedInteger('to_month');
            $table->unsignedInteger('from_year');
            $table->unsignedInteger('to_year');
            $table->enum('status', ['Active', 'Inactive'])->default('Active');
            $table->text('description')->nullable();

            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('monthly_installments');
    }
}
