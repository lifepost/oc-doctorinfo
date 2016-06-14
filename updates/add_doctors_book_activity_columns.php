<?php namespace Teb\Doctorinfo\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddDoctorsBookActivityColumns extends Migration
{

    public function up()
    {
        Schema::table('teb_doctorinfo_doctors', function($table)
        {
            $table->text('activity');
            $table->text('book');
        });
    }

    public function down()
    {
        Schema::table('teb_doctorinfo_doctors', function($table)
        {
            $table->dropColumn(array('activity', 'book'));
        });
    }

}
