<?php

namespace App\Models\Services;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Airtime extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'service_id',
        'company_id',
        'discount',
        'price',
        'bonus'
    ];

    public function company():BelongsTo
    {
        return $this->belongsTo(Company::class);
    }
}
