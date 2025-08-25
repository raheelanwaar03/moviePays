<?php

namespace App\Models\user;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WidthrawBalance extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'widthraw_name',
        'widthraw_bank',
        'widthraw_num',
        'widthraw_amount',
        'status',
    ];
}
