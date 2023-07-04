<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class Player extends Model
{
    use HasFactory;
    protected $fillable = ['namep','user_id',];

    public function getUrl2()
    {
        return Storage::url($this->path);
    }

    protected static function boot()
    {
        parent::boot();
        self::creating(function ($table) {
            if (!app()->runningInConsole()) {
                $table->user_id = auth()->id();
            }
        });
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
