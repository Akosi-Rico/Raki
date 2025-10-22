<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('integrations', function (Blueprint $table) {
            $table->id();
            $table->string('site_name')->comment('Name of the integrated site');
            $table->string('domain')->unique()->comment('Domain associated with the integration');
            $table->string('api_key')->unique()->comment('Unique API key for integration authentication');
            $table->boolean('active_flag')->default(true)->index()->comment('Indicates if the integration is active');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('integrations');
    }
};
