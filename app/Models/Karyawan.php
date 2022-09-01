<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomor_induk_karyawan',
        'nama_lengkap',
        'nama_panggilan',
        'no_identitas',
        #'fk_tempat_lahir', //choice ke tabel kota/kab
        'tempat_lahir',
        'tgl_lahir',
        'agama',
        'gender',
        'status_pernikahan',
        'jenis_identitas',
        'masa_berlaku_identitas',
        'alamat',
        'rt',
        'rw',
        'desa',
        'kecamatan',
        'kota',
        'provinsi',
        'kodepos',
        'status_rumah',
        'no_hp',
        'no_telp',
        'photo',
        'fk_cabang', //choice ke tabel cabang (ayani, rancaekek dll)
        'fk_bagian', // choice ke tabel (supporting, dll)
        'fk_level_jabatan', //choice ke tabel (staff, spv, manager, direktur dll)
        'status_karyawan', //tetap, kontrak, probation hardcore
        'fk_nama_perusahaan', //choice ke tabel (pt Ari, spbu, rkm, abm, ld)
        'tahun_gabung',
        'tahun_keluar',
        'fk_user',
        'jenis_karyawan',
        'upah',
        'tempat_lahir',
        'expired_kontrak',
        'masa_kerja',
        'alamat_domisili',
        'ptpk_status',
        'pendidikan_terakhir',
        'grade',
        'nama_institusi',
        'jurusan',
        'tahun_masuk_pendidikan',
        'tahun_lulus',
        'gpa',
        'email',
        'kontak_darurat',
        'medsos',
        'npwp',
        'golongan_darah',
        'no_rek1',
        'bank1',
        'no_rek2',
        'bank2',
        'nama_ibu_kandung',
        'bpjs_kesehatan',
        'keterangan_bpjs',
        'no_bpjs_kesehatan',
        'bpjs_tenaga_kerja',
        'keterangan_bpjs_tenaga_kerja',
        'no_bpjs_tenaga_kerja',
        'jamkes_lainnya',
        'no_ijazah',
        'instansi_ijazah',
        'no_finger',

    ];    
    public function cabang(){ 
        return $this->belongsTo('App\Models\Cabang','fk_cabang'); 
        } 
    public function jabatan(){ 
        return $this->belongsTo('App\Models\LevelJabatan','fk_level_jabatan'); 
        } 
    public function user(){ 
        return $this->belongsTo('App\Models\User','fk_user'); 
        }         
}
