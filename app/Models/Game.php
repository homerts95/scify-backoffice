<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Game extends Model
{
    use HasFactory;

    public function application(): BelongsTo {
        return $this->belongsTo(Application::class);
    }

    public function creator(): BelongsTo {
        return $this->belongsTo(Creator::class);
    }
}
