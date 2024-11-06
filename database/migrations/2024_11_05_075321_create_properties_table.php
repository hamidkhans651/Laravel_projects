<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Renamed from property_name
            $table->text('description')->nullable();
            $table->string('image_url')->nullable(); // Added for image URL
            $table->decimal('price', 15, 2); // No need to store $ symbol; format on display
            $table->string('address')->nullable();
            $table->integer('bedrooms')->nullable();
            $table->integer('bathrooms')->nullable();
            $table->string('area')->nullable(); // Changed to string for '120m2' format
            $table->integer('floor')->nullable(); // Added floor
            $table->string('parking')->nullable(); // Changed to string for '1 spot' format
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
