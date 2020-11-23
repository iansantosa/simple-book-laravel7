<?php

namespace App;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    //use HasFactory;
	
	
	/*
    protected $fillable = [
        'title','author','isbn','publisher','publication_year','last_modified_date','created_date'
    ];
	*/
	
	protected $fillable = [
        'title','author','isbn','publisher','publication_year','last_modified_date','created_date'
    ];
	
	protected $table = 'books';
}

?>