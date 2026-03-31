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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();        
            $table->date("start_date")->default(now());
            $table->date("end_date");
            $table->enum("hire_type",["monthly","daily","yearly","hourly"])->default("monthly");
            $table->foreignId("designations-id")->constrained("designations")->onDelete("cascade");
            $table->foreignId("employee-id")->constrained("employees")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contracts');
    }
};
