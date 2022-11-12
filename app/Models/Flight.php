<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;
    use HasUuids;

    protected $table = 'flights';

    protected $fillable = [
        'airline_iata',
        'flight_number',
        'from_code',
        'to_code',
        'departure_date_utc'
    ];
}
