<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MasterMediaSosial extends Model
{
    protected $table = 'master_media_sosials';
    protected $guarded = 'id';

    public function pivot_profil_media_sosial()
    {
        return $this->hasMany('App\Models\PivotProfilMediaSosial', 'media_sosial_id');
    }
}
