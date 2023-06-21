<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Peminjam extends Model
{
    use HasFactory;
    protected $table = 'peminjam';
    protected $guarded = ['id'];

    public function tansactions(): HasMany
    {
        return $this->hasMany(Transaksi::class, 'peminjam_id', 'id');
    }

}
