<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    use HasFactory;

    protected $table= 'enquiries';

    protected $fillable = [
        'date',
        'name',
        'phone_no',
        'email',
        'comment'
    ];

    public static function getTableName()
    {
        return with(new static)->getTable();
    }
}
