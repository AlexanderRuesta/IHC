<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    public function programming()
    {
        return $this->belongsToMany(Programming::class, 'programmings_documents', 'id' /* de roles */, 'id' /* de modules */);
    }
}
