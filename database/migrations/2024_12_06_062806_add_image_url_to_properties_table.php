<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->string('image_url')->nullable();  // Add the image_url column
        });
    }
    
    public function down()
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->dropColumn('image_url');  // Drop the image_url column in case of rollback
        });
    }
    
};
