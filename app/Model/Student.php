<?php

namespace App\Model;

class Student extends Model
{
    protected $table = 'sinhvien';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'MaSV', 'TenSV', 'GioiTinh', 'NgaySinh', 'QueQuan', 'MaLop', 'MatKhau'
    ];

    public function lop()
    {
        return $this->belongsTo(Lop::class, 'MaLop', 'MaLop');
    }
}


















