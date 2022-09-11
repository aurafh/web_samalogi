<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Blog extends Model
{
    use HasFactory;

    protected $guarded =['id'];

    public function getCreatedAtAttribute(){
        return Carbon::parse($this->attributes['created_at'])->translatedFormat('l, d F Y');
    }

    public function scopeSearch($query, array $search){

        $query->when($search['search']?? false, function($query, $search){
            return $query->where('judul_blog', 'like', '%'. $search.'%')
                        ->orWhere('isi_blog', 'like', '%'. $search.'%');
        });
    }
}