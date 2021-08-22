<?php

namespace App\Model;

class Diem extends Model
{
    protected $table = 'diem';

    protected $fillable = [
        'id', 'MaSV', 'MaMH', 'HocKy', 'Diem'
    ];

    public function student()
    {
        return $this->belongsTo(Student::class, 'MaSV', 'MaSV');
    }

    public function monhoc()
    {
        return $this->belongsTo(MonHoc::class, 'MaMH', 'MaMH');
    }
}


















