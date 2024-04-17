<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;
    protected $fillable = ['transaction_id', 'amount', 'description', 'date'];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class);
    }
}
