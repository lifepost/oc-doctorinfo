<?php namespace Teb\Doctorinfo\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class AddDoctorsColumns extends Migration
{

    public function up()
    {
        Schema::table('teb_doctorinfo_doctors', function($table)
        {
            $table->string('clinic_name', 255);
            $table->string('description_image_path', 255);
            $table->string('blog_image_path', 255);
        });
    }

    public function down()
    {
        Schema::table('teb_doctorinfo_doctors', function($table)
        {
            $table->dropColumn(array('clinic_name', 'description_image_path', 'blog_image_path'));
        });
    }

}
