<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';
    protected $fillable =
        [

            'lastName',
            'companyName',
            'email',
            'phoneNumber',
            'message'
        ];
    /**
     * @var array|\Illuminate\Contracts\Foundation\Application|\Illuminate\Http\Request|mixed|string|null
     */

}
