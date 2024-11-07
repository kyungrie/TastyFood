<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactInfo extends Model
{
    use HasFactory;
    protected string $name = 'contact_infos';
    protected $fillable = [
        'email',
        'telephone',
        'location',
    ];
}
