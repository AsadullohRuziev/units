<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;


    //table companies
    protected $table = "my_companies";  //companiesga emas bu my_comainesga murojat qiladi


    //custom primary key
    protected $primaryKey = 'company_id';

    //incrementing
    public  $incrementing = false;



    //timestamps
    public  $timestamps = false;  //created_at va updated_at  kerak bo'lmaydi


    //default values berish
    protected $attributes = [
        'active' => true
    ];
}
