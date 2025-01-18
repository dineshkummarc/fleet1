<?php

namespace Modules\Fleet\Models;

use Modules\Base\Models\BaseModel;
use Illuminate\Database\Schema\Blueprint;

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
    protected $table = "fleet_fleet";

    public function migration(Blueprint $table): void
    {
        $table->id();

        $table->string('name');
        $table->string('description')->nullable();
        $table->tinyInteger('published')->default(0);

    }
}
