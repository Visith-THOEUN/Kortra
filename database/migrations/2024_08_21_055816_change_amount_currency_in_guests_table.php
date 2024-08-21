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
        Schema::table('guests', function (Blueprint $table) {
            $table->dropColumn('currency');
            $table->dropColumn('amount');
            $table->integer('amount_kh')->nullable()->unsigned();
            $table->integer('amount_usd')->nullable()->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('guests', function (Blueprint $table) {
            $table->dropColumn('amount_kh');
            $table->dropColumn('amount_usd');
            $table->string('currency')->nullable();
            $table->integer('amount')->nullable();
        });
    }
};
