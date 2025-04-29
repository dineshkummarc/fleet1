<?php

namespace Modules\Partner\Models\Data;

use Modules\Base\Classes\Datasetter;

class Type
{
    /**
     * Set ordering of the Class to be migrated.
     *
     * @var int
     */
    public $ordering = 1;

    /**
     * Run the database seeds with system default records.
     *
     * @param Datasetter $datasetter
     *
     * @return void
     */
    public function data(Datasetter $datasetter): void
    {
        $datasetter->add_data('partner', 'type', 'name', [
            "name" => "company",
        ]);
        $datasetter->add_data('partner', 'type', 'name', [
            "name" => "contact",
        ]);
        $datasetter->add_data('partner', 'type', 'name', [
            "name" => "customer",
        ]);
        $datasetter->add_data('partner', 'type', 'name', [
            "name" => "employee",
        ]);
        $datasetter->add_data('partner', 'type', 'name', [
            "name" => "vendor",
        ]);
    }
}
