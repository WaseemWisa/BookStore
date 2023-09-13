<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;
class Products extends Model
{
    use HasFactory , Uuids;
    protected $table = 'products';
    protected $fillable = ['id', 'name', 'rate', 'price', 'quantity'];
    public $timestamps = false;
}
