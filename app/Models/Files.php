<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Files extends Model
{
   use HasFactory;

   protected $fillable = [
      'name','submitter','projectname','division','filepath','keterangan','status'
   ];

   protected $attributes = [
      'status' => 'Pending',
  ];
}