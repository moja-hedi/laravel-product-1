<?php

namespace MojaHedi\Product\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Variable extends Model
{
    //   use HasFactory;
    use SoftDeletes;
    protected $timestamps = true;

    protected $fillable = ['id', 'product_variant_id', 'variable_ref_id', 'extra_price'];
}