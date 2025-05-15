<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listign extends Model
{
    use HasFactory;
    
    public function scopeFilter($query, array $filters)
    {

        if ($filters['tag'] ?? false) {

            $query->where('tags', 'like', '%' . request('tag') . '%');
        }

        //search
        if ($filters['search'] ?? false) {

            // $query->where('title', 'like', '%' . request('serach') . '%')
            //     ->orwhere('tags', 'like', '%' . request('search') . '%')
            //     ->orwhere('company', 'like', '%' . request('search') . '%')
            //     ->orwhere('location', 'like', '%' . request('search') . '%')
            //     ->orwhere('description', 'like', '%' . request('search') . '%');
            $query->where(function ($query) {
                $searchTerm = '%' . request('search') . '%';

                $query->where('title', 'like', $searchTerm)
                    ->orWhere('tags', 'like', $searchTerm)
                    ->orWhere('company', 'like', $searchTerm)
                    ->orWhere('location', 'like', $searchTerm)
                    ->orWhere('description', 'like', $searchTerm);
            });
        }
    }
}
