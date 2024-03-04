<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['title','description','image','link','member_id'];
    public function team():HasMany
    {
      return $this->hasMany(Team::class); 
    }
}
