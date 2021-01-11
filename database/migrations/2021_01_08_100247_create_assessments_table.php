<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssessmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assessments', function (Blueprint $table) {
            $table->id();
            $table->string('sector')->nullable();
            $table->string('email')->nullable();
            $table->string('average_turnover')->nullable();
            $table->string('consecutive_growing_income')->nullable();
            $table->string('net_income')->nullable();
            $table->string('net_result')->nullable();
            $table->string('consecutive_positive_result')->nullable();
            $table->string('net_financial_debt')->nullable();
            $table->string('fixed_assets')->nullable();
            $table->string('largest_shareholder_percentage')->nullable();
            $table->string('largest_customer_billing')->nullable();
            $table->boolean('company_audited')->nullable();
            $table->boolean('operation_merger')->nullable();
            $table->boolean('company_selling_percentage')->nullable();
            $table->integer('ebitda_rev')->nullable();
            $table->integer('net_margin')->nullable();
            $table->integer('ebitda_deuda')->nullable();
            $table->integer('asset_revenue_ratio')->nullable();
            $table->integer('total_score')->nullable();
            $table->string('decision')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assessments');
    }
}
