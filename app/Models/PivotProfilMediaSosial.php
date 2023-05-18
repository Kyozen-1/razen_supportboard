<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PivotProfilMediaSosial extends Model
{
    protected $table = 'pivot_profil_media_sosials';
    protected $guarded = 'id';

    public function media_sosial()
    {
        return $this->belongsTo('App\Models\MasterMediaSosial','media_sosial_id');
    }

    public function profil()
    {
        return $this->belongsTo('App\Models\Profil', 'profil_id');
    }
}
