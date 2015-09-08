<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
	protected $table = 'medicine_suppliers';
    // public $timestamps = false;

	protected $fillable = ['name', 'location', 'email', 'telephone1', 'telephone2', 'date_added', 'is_enabled'];
}
