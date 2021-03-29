<?php

namespace App\Models\Material;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InspectStandard extends Model
{
    use HasFactory;

    protected $table = 'material_inspect_standards';
    protected $dates = ['created_at'];
    protected $casts = [
        'created_at' => 'datetime:Y-m-d',
    ];
    /**
     * @var mixed
     */

}
