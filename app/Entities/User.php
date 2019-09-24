<?php

namespace App\Entities;


use Illuminate\Notifications\Notifiable;

/**
 * App\Entities\User
 *
 * @property int $id
 * @property int $chat_id
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $username
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @mixin \Eloquent
 *
 * @method static user firstOrCreate()
 */
class User extends AbstractEntity
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'chat_id',
        'first_name',
        'last_name',
        'username',
    ];
}
