<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appeal extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'phone_of_client',
        'num_automat',
        'sum_promo',
        'notice',
        'expired',
        'rand_gen',
        'appeal_status',
        'filename',
    ];

    public static function codeGenerated($length) {
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
        return substr(str_shuffle($permitted_chars), 0, $length);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
