<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    use HasFactory;

    protected $table= 'outlets';

    protected $fillable = [
        'outlet_code',
        'outlet_name',
        'address',
        'district',
        'state',
        'city',
        'map',
        'socket_type',
        'vehicles',
        'amenities',
    ];

    public static function getTableName()
    {
        return with(new static)->getTable();
    }
}
