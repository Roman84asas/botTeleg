<?php


namespace App\Entities;


/**
 * App\Entities\Message
 *
 * @property int $id
 * @property int $user_id
 * @property int $external_id
 * @property string $text
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @mixin \Eloquent
 */
class Message extends AbstractEntity
{

}