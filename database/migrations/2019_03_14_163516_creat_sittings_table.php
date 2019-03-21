<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatSittingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sittings', function (Blueprint $table) {
         $table->string('name');
        $table->string('email')->unique();
         $table->longtext('description');
         $table->longtext('keywords');
        $table->string('maintainanc');

         $table->longtext('maintainanc_desc');

    });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
     Schema::dropIfExists('sittings');

    }
}
