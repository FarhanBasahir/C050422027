<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Register extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_lengkap',
        'nama_panggilan',
        'ttl',
        'alamat_asal',
        'alamat_banjarmasin',
        'email',
        'motivasi',
        'pengalaman_organisasi',
        'pengalaman_kepanitiaan',
        'motto_hidup',
        'divisi',
    ];

    public function register()
    {
        return $this->belongsTo(Register::class);
    }
}
