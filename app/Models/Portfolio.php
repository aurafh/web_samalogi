<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    protected $guarded =['id'];

    public function scopeSearch($query, array $filter){

        $query->when($filter['search']?? false, function($query, $search){
            return $query->where('nama_portfolio', 'like', '%'. $search.'%');
        });
    }
}
