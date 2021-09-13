<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class RequestAttachment.
 *
 * @package namespace App\Models;
 */
class RequestAttachment extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    protected $guarded=['id'];

    public function attachment(){
        return $this->hasOne(Attachments::class, 'id', 'attachment_id');
    }

}
