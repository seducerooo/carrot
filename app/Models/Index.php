<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Index extends Model
{
    protected $table = ['brands'];
    protected $fillable =[
        'name',
        'brand_images'];
    /**
     * @var int|mixed
     */
}
