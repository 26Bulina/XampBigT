<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEchipamentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('echipament', function (Blueprint $table) {
            $table->increments('id');
            $table->int('cod');
            $table->int('firma');
            $table->int('type_id');
            $table->varchar2('identificator');
            $table->timestamps('updated_at');
            $table->timestamps('created_at');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('echipament');
    }
}
