<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MataKuliah extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'mahasiswa_id', 'order'];

    public function mahasiswa()
    {
        return $this->belongsTo(User::class);
    }
}
