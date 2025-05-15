<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Notifications\Notifiable;

class Person extends Authenticatable implements AuthenticatableContract
{
    use HasFactory;

      // Example: Defining the table name
      protected $table = 'persons';

      // Example: Defining the primary key
      protected $primaryKey = 'id';
      // Person.php
// public function savedJobs()
// {
//     return $this->belongsToMany(Job::class, 'job_saved', 'id_person', 'id_job');
// }


}
