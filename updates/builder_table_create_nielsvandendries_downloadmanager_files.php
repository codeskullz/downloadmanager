<?php namespace NielsVanDenDries\Downloadmanager\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateNielsvandendriesDownloadmanagerFiles extends Migration
{
    public function up()
    {
        Schema::create('nielsvandendries_downloadmanager_files', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
            $table->text('name');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('nielsvandendries_downloadmanager_files');
    }
}
