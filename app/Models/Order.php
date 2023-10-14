<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected  $guarded = ['id'];

    public function net()
    {
        return ($this->harga * $this->qty);
    }

    public function ppn()
    {
        return (($this->harga * $this->qty) * 0.095);
    }

    public function total()
    {
        return ($this->harga * $this->qty) + (($this->harga * $this->qty) * 0.095) - $this->diskon;
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'cust_id');
    }
}
