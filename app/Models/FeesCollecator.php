<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FeesCollecator extends Model
{
    use HasFactory;
   protected $primaryKey = 'id';

    function trxIds()
    {
        return $this->hasOne(FeesCollecator::class, 'user_id');
    }
}
