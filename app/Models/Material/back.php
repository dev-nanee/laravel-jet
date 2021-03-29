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

    public function material()
    {
        return $this->belongsTo(\App\Models\Material\Material::class,'material_id', 'id');
    }
}
