<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;


class Job extends Model
{
    
    use HasFactory;

//     // Job.php
// public function persons()
// {
//     return $this->belongsToMany(Person::class, 'job_saved', 'id_job', 'id_person');
// }

    public function company()
{
    return $this->belongsTo(Company::class);
}

public function scopeFilter($query, array $filters)
    {
        //auth()->guard('company')->user()->id
        $companyId =auth('company')->id(); ;
        
        if(auth('company')->check())
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
                $searchTerm = '%' . request('search') . '%';
                $query->where(function ($query) use ($searchTerm,$companyId) {
                    
    
                    $query->where('title', 'like', $searchTerm)
                        ->orWhere('tags', 'like', $searchTerm)
                        ->orWhere('company', 'like', $searchTerm)
                        ->orWhere('location', 'like', $searchTerm)
                        ->orWhere('description_job', 'like', $searchTerm)
                        ->Where('id_company',$companyId);
                });
            }
        }
        else{
            if ($filters['tag'] ?? false) {

                $query->where('tags', 'like', '%' . request('tag') . '%');
            }
    
            //search
            if ($filters['search'] ?? false) {
    
                $searchTerm = '%' . request('search') . '%';
                $query->where(function ($query) use ($searchTerm) {
                    
    
                    $query->where('title', 'like', $searchTerm)
                        ->orWhere('jobs.location', 'like', $searchTerm)
                        ->orWhere('tags', 'like', $searchTerm)
                        ->orWhere('description_job', 'like', $searchTerm);
                });
            }
        }

        
    }

}
