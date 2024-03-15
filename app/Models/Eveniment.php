<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Eveniment extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'start_datetime', 'ticket_price', 'image_url'];

}
