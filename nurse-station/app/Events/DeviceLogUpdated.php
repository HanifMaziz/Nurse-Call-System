<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class DeviceLogUpdated implements ShouldBroadcast
{
    use SerializesModels;

    public $deviceLog;

    public function __construct($deviceLog)
    {
        $this->deviceLog = $deviceLog;

        Log::info('DeviceLogUpdated Event Triggered', [
            'device' => $this->deviceLog
        ]);
    }

    public function broadcastOn()
    {
        return new Channel('device-log');
    }
}