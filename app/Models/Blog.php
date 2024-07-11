<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table= 'blogs';

    protected $fillable = [
        'title',
        'images',
        'blog_details',
    ];

    public static function getTableName()
    {
        return with(new static)->getTable();
    }
}
