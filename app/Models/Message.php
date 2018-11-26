<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\HasMedia;
class Message extends Model implements HasMedia
{
    use HasMediaTrait;
    
    protected $guarded = [];

    public function chats()
    {
        return $this->hasMany(Chat::class);
    }

    public function createForSend($session_id)
    {
        return $this->chats()->create([
            'session_id' => $session_id,
            'type' => 0,
            'user_id' => auth()->id()]);
    }

    public function createForReceive($session_id, $to_user)
    {
        return $this->chats()->create([
            'session_id' => $session_id,
            'type' => 1,
            'user_id' => $to_user]);
    }
}
