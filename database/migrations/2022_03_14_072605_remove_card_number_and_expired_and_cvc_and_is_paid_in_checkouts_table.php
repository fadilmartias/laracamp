<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('checkouts', function (Blueprint $table) {
            // $table->dropColumn('card_number');
            // $table->dropColumn('cvc');
            // $table->dropColumn('is_paid');
            // $table->dropColumn('expired');
            $table->dropColumn(['card_number', 'cvc', 'is_paid', 'expired']);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('checkouts', function (Blueprint $table) {
            $table->string('card_number', 20)->nullable();
            $table->date('expired')->nullable();
            $table->string('cvc', 3)->nullable();
            $table->boolean('is_paid')->default(false);
        });
    }
};
