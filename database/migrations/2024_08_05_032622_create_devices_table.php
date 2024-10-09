<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('devices', function (Blueprint $table) {
            $table->id();
            $table->string('code')->nullable();
            $table->string('obscape_id')->nullable();
            $table->string('name')->nullable();
            $table->json('devices')->nullable();
            $table->decimal('latitude', 10, 7)->nullable();
            $table->decimal('longitude', 10, 7)->nullable();
            $table->string('reference')->nullable();
            $table->string('type')->nullable();
            $table->string('gsm_id')->nullable();
            $table->timestamps();
            $table->string('foto')->nullable();
            $table->timestamp('last_update')->nullable();
            $table->string('level')->nullable();
            $table->integer('CSQ')->nullable();
            $table->decimal('VBAT', 10, 2)->nullable();
            $table->string('siaga_4')->nullable();
            $table->string('siaga_3')->nullable();
            $table->string('siaga_2')->nullable();
            $table->string('siaga_1')->nullable();
            $table->string('nohp')->nullable();
            $table->string('status')->nullable();
            $table->decimal('VSOL', 10, 2)->nullable();
            $table->decimal('TEMP', 10, 2)->nullable();
            $table->decimal('HUM', 10, 2)->nullable();
            $table->decimal('PATM', 10, 2)->nullable();
            $table->decimal('Xtilt', 10, 2)->nullable();
            $table->decimal('Ytilt', 10, 2)->nullable();
            $table->decimal('titik_nol', 10, 2)->nullable();
            $table->decimal('real_ketinggian', 10, 2)->nullable();
            $table->decimal('debit', 10, 2)->nullable();
            $table->decimal('elevasi_muka_air', 10, 2)->nullable();
            $table->string('status_siaga')->nullable();
            $table->decimal('titik_elevasi', 10, 2)->nullable();
            $table->decimal('temperature', 10, 2)->nullable();
            $table->decimal('waterPressure', 10, 2)->nullable();
            $table->decimal('depth', 10, 2)->nullable();
            $table->decimal('conductivity', 10, 2)->nullable();
            $table->decimal('specCond', 10, 2)->nullable();
            $table->decimal('salinity', 10, 2)->nullable();
            $table->decimal('density', 10, 2)->nullable();
            $table->decimal('turbidity', 10, 2)->nullable();
            $table->decimal('TSS', 10, 2)->nullable();
            $table->decimal('TDS', 10, 2)->nullable();
            $table->decimal('pH', 10, 2)->nullable();
            $table->decimal('pHmV', 10, 2)->nullable();
            $table->decimal('DO', 10, 2)->nullable();
            $table->decimal('DOsat', 10, 2)->nullable();
            $table->decimal('ORP', 10, 2)->nullable();
            $table->decimal('OPP', 10, 2)->nullable();
            $table->decimal('chloride', 10, 2)->nullable();
            $table->decimal('chloridemV', 10, 2)->nullable();
            $table->decimal('resistivity', 10, 2)->nullable();
            $table->decimal('chlorophyllA', 10, 2)->nullable();
            $table->decimal('chlorophyllAfi', 10, 2)->nullable();
            $table->decimal('nitrate', 10, 2)->nullable();
            $table->decimal('ammonium', 10, 2)->nullable();
            $table->decimal('ammoniummV', 10, 2)->nullable();
            $table->decimal('ammonia', 10, 2)->nullable();
            $table->decimal('ammoniaTot', 10, 2)->nullable();
            $table->decimal('BGAphcy', 10, 2)->nullable();
            $table->decimal('BGAphcyfi', 10, 2)->nullable();
            $table->decimal('BGAphce', 10, 2)->nullable();
            $table->decimal('cspd', 10, 2)->nullable();
            $table->decimal('cdir', 10, 2)->nullable();
            $table->timestamp('deletedAt')->nullable();
            $table->decimal('precipitation', 10, 2)->nullable();
            $table->decimal('solar', 10, 2)->nullable();
            $table->decimal('strikeDistance', 10, 2)->nullable();
            $table->decimal('windSpeed', 10, 2)->nullable();
            $table->decimal('windDirection', 10, 2)->nullable();
            $table->decimal('gustWindSpeed', 10, 2)->nullable();
            $table->decimal('gustWindDirection', 10, 2)->nullable();
            $table->decimal('airTemperature', 10, 2)->nullable();
            $table->decimal('vaporPressure', 10, 2)->nullable();
            $table->decimal('atmosphericPressure', 10, 2)->nullable();
            $table->decimal('relativeHumidity', 10, 2)->nullable();
            $table->decimal('humiditySensorTemperature', 10, 2)->nullable();
            $table->decimal('xOrientation', 10, 2)->nullable();
            $table->decimal('yOrientation', 10, 2)->nullable();
            $table->decimal('NorthWindSpeed', 10, 2)->nullable();
            $table->decimal('EastWindSpeed', 10, 2)->nullable();
            $table->decimal('gustNorthWindSpeed', 10, 2)->nullable();
            $table->decimal('gustEastWindSpeed', 10, 2)->nullable();
            $table->string('project')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('devices');
    }
};


