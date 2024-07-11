<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table= 'contacts';

    protected $fillable = [
        'name',
        'phone_no',
        'email',
        'subject',
        'message',
        'date'
    ];

    public static function getTableName()
    {
        return with(new static)->getTable();
    }
}
