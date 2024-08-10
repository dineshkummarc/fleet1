<?php

namespace Modules\Fleet\Models;

use Modules\Base\Models\BaseModel;

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
