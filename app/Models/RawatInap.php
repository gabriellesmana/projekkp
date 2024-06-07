<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RawatInap extends Model
{
    use HasFactory;

    protected $table = 'rawatinap';


    protected $fillable = [
        'member_id', 
        'nama_kontak_darurat', 
        'no_tlp_kontak_darurat', 
        'pilihan_kamar', 
        'lama_rawat_inap'
    ];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}
