<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Access extends Model
{
    protected $table = 'table_earlyaccesses';
    protected  $fillable =
        [
          'username',
          'email'
        ];
}
