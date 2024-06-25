<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    use HasFactory;
    protected $table = "parties";
    protected $fillable = [
        'party_type', 
        'name', 
        'phone', 
        'address', 
        'account_holder', 
        'account_number', 
        'bank', 
        'bank_branch', 
        'bank_state', 
        'bank_ifse', 
        'bank_zip'
    ];

    public function getBills(){
        return $this->hasMany(Billing::class);
    }

}
