<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Notifications\Notifiable;


class Company extends Authenticatable implements AuthenticatableContract
{
    use Notifiable;

    // ... your existing model code ...

    // Example: Defining the table name
    protected $table = 'companies';

    // Example: Defining the primary key
    protected $primaryKey = 'id';

    // ... other model properties and methods ...
}
