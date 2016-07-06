<?php namespace Teb\Doctorinfo\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateDoctorsTable extends Migration
{

    public function up()
    {
        Schema::create('teb_doctorinfo_doctors', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 255);
            $table->string('branch_name', 255);
            $table->text('description');
            $table->text('personal_history');
            $table->text('thesis');
            $table->text('time_table');
            $table->string('blog_name', 255);
            $table->string('blog_url', 255);
            $table->string('address', 255);
            $table->string('address_latitude', 11);
            $table->string('address_longitude', 11);
            $table->integer('order_no');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('teb_doctorinfo_doctors');
    }

}
