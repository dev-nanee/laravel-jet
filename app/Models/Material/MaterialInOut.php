<?php

namespace App\Models\Material;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaterialInOut extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'inner_type',
        'material_id',
        'customer_id',
        'wdate'
    ];

}
