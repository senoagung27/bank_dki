<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    protected $table = 'devices';

    protected $fillable = [
        'code', 'obscape_id', 'name', 'devices', 'latitude', 'longitude', 'reference', 'type', 'gsm_id', 
        'foto', 'last_update', 'level', 'CSQ', 'VBAT', 'siaga_4', 'siaga_3', 'siaga_2', 'siaga_1', 'nohp', 
        'status', 'VSOL', 'TEMP', 'HUM', 'PATM', 'Xtilt', 'Ytilt', 'titik_nol', 'real_ketinggian', 'debit', 
        'elevasi_muka_air', 'status_siaga', 'titik_elevasi', 'temperature', 'waterPressure', 'depth', 
        'conductivity', 'specCond', 'salinity', 'density', 'turbidity', 'TSS', 'TDS', 'pH', 'pHmV', 'DO', 
        'DOsat', 'ORP', 'OPP', 'chloride', 'chloridemV', 'resistivity', 'chlorophyllA', 'chlorophyllAfi', 
        'nitrate', 'ammonium', 'ammoniummV', 'ammonia', 'ammoniaTot', 'BGAphcy', 'BGAphcyfi', 'BGAphce', 
        'cspd', 'cdir', 'deletedAt', 'precipitation', 'solar', 'strikeDistance', 'windSpeed', 'windDirection', 
        'gustWindSpeed', 'gustWindDirection', 'airTemperature', 'vaporPressure', 'atmosphericPressure', 
        'relativeHumidity', 'humiditySensorTemperature', 'xOrientation', 'yOrientation', 'NorthWindSpeed', 
        'EastWindSpeed', 'gustNorthWindSpeed', 'gustEastWindSpeed', 'project'
    ];

    protected $casts = [
        'devices' => 'array',
        'latitude' => 'decimal:7',
        'longitude' => 'decimal:7',
        'last_update' => 'datetime',
        'VBAT' => 'decimal:2',
        'VSOL' => 'decimal:2',
        'TEMP' => 'decimal:2',
        'HUM' => 'decimal:2',
        'PATM' => 'decimal:2',
        'Xtilt' => 'decimal:2',
        'Ytilt' => 'decimal:2',
        'titik_nol' => 'decimal:2',
        'real_ketinggian' => 'decimal:2',
        'debit' => 'decimal:2',
        'elevasi_muka_air' => 'decimal:2',
        'titik_elevasi' => 'decimal:2',
        'temperature' => 'decimal:2',
        'waterPressure' => 'decimal:2',
        'depth' => 'decimal:2',
        'conductivity' => 'decimal:2',
        'specCond' => 'decimal:2',
        'salinity' => 'decimal:2',
        'density' => 'decimal:2',
        'turbidity' => 'decimal:2',
        'TSS' => 'decimal:2',
        'TDS' => 'decimal:2',
        'pH' => 'decimal:2',
        'pHmV' => 'decimal:2',
        'DO' => 'decimal:2',
        'DOsat' => 'decimal:2',
        'ORP' => 'decimal:2',
        'OPP' => 'decimal:2',
        'chloride' => 'decimal:2',
        'chloridemV' => 'decimal:2',
        'resistivity' => 'decimal:2',
        'chlorophyllA' => 'decimal:2',
        'chlorophyllAfi' => 'decimal:2',
        'nitrate' => 'decimal:2',
        'ammonium' => 'decimal:2',
        'ammoniummV' => 'decimal:2',
        'ammonia' => 'decimal:2',
        'ammoniaTot' => 'decimal:2',
        'BGAphcy' => 'decimal:2',
        'BGAphcyfi' => 'decimal:2',
        'BGAphce' => 'decimal:2',
        'cspd' => 'decimal:2',
        'cdir' => 'decimal:2',
        'deletedAt' => 'datetime',
        'precipitation' => 'decimal:2',
        'solar' => 'decimal:2',
        'strikeDistance' => 'decimal:2',
        'windSpeed' => 'decimal:2',
        'windDirection' => 'decimal:2',
        'gustWindSpeed' => 'decimal:2',
        'gustWindDirection' => 'decimal:2',
        'airTemperature' => 'decimal:2',
        'vaporPressure' => 'decimal:2',
        'atmosphericPressure' => 'decimal:2',
        'relativeHumidity' => 'decimal:2',
        'humiditySensorTemperature' => 'decimal:2',
        'xOrientation' => 'decimal:2',
        'yOrientation' => 'decimal:2',
        'NorthWindSpeed' => 'decimal:2',
        'EastWindSpeed' => 'decimal:2',
        'gustNorthWindSpeed' => 'decimal:2',
        'gustEastWindSpeed' => 'decimal:2',
    ];
}
