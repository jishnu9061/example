<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Count extends Model
{
    use HasFactory;

    protected $table = 'counts';

    protected $fillable = [
        'charging_stations',
        'hours_of_charging',
        'active_users',
        'cities'
    ];

    public static function getTableName()
    {
        return with(new static)->getTable();
    }
}
