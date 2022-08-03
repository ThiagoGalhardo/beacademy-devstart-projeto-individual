<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'form_id',
        'service_name',
        'price',
        'status',
    ];

    public function order()
    {
        return $this->belongsTo(User::class);
    }

    public function getOrders(string $search = null)
    {
        $orders = $this->where(function ($query) use ($search) {
            if ($search) {
                $query->where('id', $search);
                $query->orWhere('status', 'LIKE', "%{$search}%");
            }
        })
            ->paginate(5);
        return $orders;
    }
}
