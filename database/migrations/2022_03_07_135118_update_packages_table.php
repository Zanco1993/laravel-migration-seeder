<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('packages', function (Blueprint $table) {
            // eseguo un update per la voce cost in costs
            $table->renameColumn('cost', 'costs')->change();
            $table->string('name')->nullable()->change();
            $table->string('location')->nullable()->change();
            $table->smallInteger('num_people')->nullable()->change();
            $table->smallInteger('cost')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('packages', function (Blueprint $table) {
            $table->renameColumn('costs', 'cost');
            $table->string('name');
            $table->string('location');
            $table->smallInteger('num_people');
            $table->smallInteger('cost');
        });
    }
}
