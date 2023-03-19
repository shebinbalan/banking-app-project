<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statement extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'deposits_id',
        'with_draws_id',
        'transfer_money_id',
        'balance',
    ];

    public function deposits()
    {
        return $this->belongsTo(Deposit::class ,'deposits_id', 'id');
    }

    public function withdraws()
    {
        return $this->belongsTo(WithDraw::class ,'with_draws_id', 'id');
    }

    public function transfermoney()
    {
        return $this->belongsTo(TransferMoney::class ,'transfer_money_id', 'id');
    }
}
