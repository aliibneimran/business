<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Team extends Model
{
    use HasFactory;
    protected $fillable = ['name','designation','description','image','social1','social2','social3','social4'];
    public function project():BelongsTo
    {
      return $this->belongsTo(Project::class); 
    }
}
