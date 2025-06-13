<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{    
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'customer_id',
        'province_name',
        'city_name',
        'district_name',
        'subdistrict_name',
        'zip_code',
        'full_address',
        'invoice',
        'weight',
        'total',
        'status',
        'snap_token',
    ];

protected $casts = [
    'total' => 'integer',
];

    /**
     * TransactionDetails
     *
     * @return void
     */
    public function TransactionDetails()
    {
        return $this->hasMany(TransactionDetail::class);
    }

    /**
     * shipping
     *
     * @return void
     */
    public function shipping()
    {
        return $this->hasOne(Shipping::class);
    }

    /**
     * customer
     *
     * @return void
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
}