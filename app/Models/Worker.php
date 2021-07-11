<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;

    public function leader()
    {
        return $this->belongsTo(Worker::class, 'leader_id', 'id');
    }

    public function subordinates()
    {
        return $this->hasMany(Worker::class, 'leader_id', 'id');
    }

    public function dismissalReason()
    {
        return $this->hasOne(DismissalReason::class, 'id', 'dismissal_reason_id');
    }

    public function position()
    {
        return $this->hasOne(Position::class, 'id', 'position_id');
    }
}
