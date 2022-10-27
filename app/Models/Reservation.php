<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'folio',
        'client_id',
        'amount',
        'arrival_date',
        'departure_date',
    ];

    public function client(){
        return $this->belongsTo(Client::class);
    }
}
