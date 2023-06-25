<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'deadline', 'assigned_client', 'status'];

    public function client() {
        return $this->blongsTo(Client::class, 'assigned_client');
    }
}
