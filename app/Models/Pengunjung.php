<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;

class Pengunjung extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    protected $table    = 'pengunjung';
    protected $fillable = [
        'id',
        'nama_pengunjung',
        'no_telp',
        'email',
        'nik',
        'tgl_lahir',
        'alamat',
        'is_active',
        'is_deleted',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'
    ];

    protected $rules = [
        'nama_pengunjung' => 'required',
        'no_telp' => 'numeric',
        'email' => 'email',
        'nik' => 'numeric'
    ];

    public function validate(){
        Validator::make($this->toArray(), $this->rules)->validate();
        return $this;
    }
}
