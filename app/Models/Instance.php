<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instance extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'last_seen_at' => 'datetime'
    ];

    public function url()
    {
        return url('/instance/'. $this->domain);
    }

    public function fedidbUrl()
    {
        return 'https://fedidb.org/network/instance/' . $this->domain;
    }
}
