<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CheckingAccount extends Model
{
    use HasFactory;

    public $guarded = ['id'];

    public function pixKeys(): HasMany
    {
        return $this->hasMany(PixKey::class);
    }
}
