<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ReturnModel extends Model
{
    use HasFactory;

    protected $table = 'returns';

    public $timestamps = false;

    protected $fillable = [
        'loan_detail_id',
        'charge',
        'amount',
    ];

    public function loanDetail()
    {
        return $this->belongsTo(LoanDetail::class);
    }
}



