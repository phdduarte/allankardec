<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPdfAndFileToManuscritos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('manuscritos', function (Blueprint $table) {
            $table->dropColumn('pic');
            $table->string('photo')->nullable();
            $table->string('pdf')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('manuscritos', function (Blueprint $table) {
            $table->dropColumn('photo');
            $table->dropColumn('pdf');
        });
    }
}
