<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use HasFactory, SoftDeletes;
//    protected $table = "companies";
//    protected $primaryKey = 'company_id';
//    public  $incrementing = false;
//    public  $timestamps = false;
//    protected $attributes = [
//        'active' => true
//    ];

    protected $fillable=['name','address','phone'];

//    protected $guarded = []; //{{{fillable}}} bilan teskari ishlaydi
}
