<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    protected $table = "promos";
    public $timestamps = false;
    protected $primaryKey = 'id';
    /**
     * The attributes that are mass assignable
     * 
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'start_date',
        'expired_date',
        'discount',
    ];

    public static function index()
    {
        return Promo::all();
    }

    public static function store(Request $request)
    {
        Promo::create($request->all());
    }

    public static function edit(Request $request, Promo $promos)
    {
        $promos->update($request->all());
    }
}
