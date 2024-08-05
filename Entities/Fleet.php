<?php

namespace Modules\Fleet\Entities;

use Modules\Base\Entities\BaseModel;

class Fleet extends BaseModel
{
    /**
     * The fields that can be filled
     *
     * @var array<string>
     */
    protected $fillable = ['name', 'description', 'published'];

    /**
     * The fields that can be filled
     *
     * @var string
     */
    protected $table = "fleet";

}
