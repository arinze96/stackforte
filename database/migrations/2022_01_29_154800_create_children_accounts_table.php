<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChildrenAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('children_accounts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("user_id");
            $table->string('childs_fullname',200);
            $table->string('childs_age',200);
            $table->string('currency',200);
            $table->string('amount',200);
            $table->string('duration',200);
            $table->tinyInteger('status')->default(0);
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
        Schema::dropIfExists('children_accounts');
    }
}
