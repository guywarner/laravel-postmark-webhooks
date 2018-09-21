<?php

namespace Mvdnbrk\PostmarkWebhooks;

use Illuminate\Database\Eloquent\Model;

class PostmarkWebhookLog extends Model
{
    /**
     * The name of the "updated at" column.
     * Set to null to disable this column.
     *
     * @var string
     */
    const UPDATED_AT = null;

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'payload' => 'array',
    ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
}