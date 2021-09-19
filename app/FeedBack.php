<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeedBack extends Model
{
    protected $fillable = ['feedback', 'client_id', 'vendor_id'];

    public function client()
    {
        return $this->belongsTo('App\Client', 'client_id');
    }
}
