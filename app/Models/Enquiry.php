<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    use HasFactory;
    protected $table = 'enquiry';

    // protected $fillable = ['title', 'first_name', 'middle_name', 'email', 'phone_number','course_of_study','subject_area'];
}
