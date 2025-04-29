<?php

namespace Modules\Partner\Models\Data;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Modules\Base\Classes\Datasetter;

class Partner
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
        $partner = DB::table('partner_partner')->first();

        if (!$partner) {
            $user = DB::table('users')->first();

            if (!$user) {
                $user = new User();
                $user->password = Hash::make('johndoe');
                $user->email = 'johndoe@johndoe.com';
                $user->name = 'John Doe';
                $user->is_admin = 1;
                $user->username = 'johndoe';
                $user->phone = '0723232323';
                $user->save();
            }

            $name_arr = explode(' ', $user->name);

            $first_name = $name_arr[0] ?? 'John';
            $last_name = $name_arr[1] ?? 'Doe';

            $datasetter->add_data('partner', 'partner', 'user_id', [
                "user_id" => $user->id,
                "email" => $user->email,
                "first_name" => $first_name,
                "last_name" => $last_name,
            ]);
        }
    }
}
