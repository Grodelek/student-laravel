<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Student extends Model
{
    use HasFactory;

    // Nazwa tabeli
    protected $table = 'students';

    //To pole określa, które kolumny mogą być masowo przypisywane, np. przy użyciu metody create()
    protected $fillable = ['name', 'surname', 'index', 'email', 'age'];


}
