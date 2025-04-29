<?php

namespace Modules\Partner\Models;

use Modules\Base\Models\BaseModel;
use Illuminate\Database\Schema\Blueprint;

class Type extends BaseModel
{
    /**
     * The fields that can be filled
     *
     * @var array<string>
     */
    protected $fillable = ['name'];

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = "partner_type";


    public function migration(Blueprint $table): void
    {

        $table->string('name', 20)->nullable()->unique('name');

    }
}
