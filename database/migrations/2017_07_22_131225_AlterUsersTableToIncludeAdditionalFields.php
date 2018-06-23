<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUsersTableToIncludeAdditionalFields extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->enum('register_from', ['f0', 'b1', 'f1']);
            $table->string('phone', 50);
            $table->string('additional_phone', 50);
            $table->string('address', 255);
            $table->string('reference', 50);
            $table->float('discount_percentage')->nullable();
            $table->string('type', 50)->nullable();
            $table->boolean('active')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['register_from', 'phone', 'additional_phone', 'address', 'reference', 'discount_percentage', 'type', 'active']);
        });
    }
}
