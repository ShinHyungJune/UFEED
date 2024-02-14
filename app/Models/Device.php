<?php

namespace App\Models;

use App\Enums\DeviceStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'ping_value', 'cpu_load_value', 'memory_load_value'];

    protected $guarded = ["id"];

    protected $appends = ["totalStatus"];

    public function histories()
    {
        return $this->hasMany(History::class);
    }

    public function devices()
    {
        return $this->hasMany(Device::class);
    }

    public function getTotalStatusAttribute()
    {
        $status = $this->status;

        // 소속 device중에 부모 device 상태와 다른게 있다면
        if($this->devices()->where("status", "!=", $this->status)->count() > 0){
            $childDevice = $this->devices()->where("status", "!=", $this->status)->first();

            $status = $childDevice->status;
        }

        return $status;
    }
}
