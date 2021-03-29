<?php

namespace App\Models\Material;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code',
        'type',
        'name',
        'model_code',
        'color',
        'unit_code',
        'unit_qty',
    ];

    public function testDatabase()
    {
        $material = Material::factory()->make();
        $material = Material::factory()->count(3)->create();
        // Use model in tests...
    }

}
