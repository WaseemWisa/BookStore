<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Traits\Uuids;
class Category extends Model
{
    use HasFactory , Uuids;
    protected $table = 'categories';
    protected $fillable = ['id', 'name', 'quantity'];
    public $timestamps = false;
}
