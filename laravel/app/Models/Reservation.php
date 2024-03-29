<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'timestamp',
        'table_id',
        'notes',
    ];

    public function table()
    {
        return $this->belongsTo(Table::class);
    }
}
