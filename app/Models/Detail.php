<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

//created and coded by Andriatama Bagaskara
class Detail extends Model
{
    use HasFactory;

    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
