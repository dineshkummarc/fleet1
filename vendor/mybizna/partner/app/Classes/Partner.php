<?php

namespace Modules\Partner\Classes;

use Modules\Partner\Events\GetPartner;
use Modules\Partner\Models\Partner as DBPartner;

class Partner
{

    /**
     * Create Partner
     *
     * @param int $partner_id
     *
     * @return object|bool
     */

    public function createPartner($data)
    {
        $whereData = [];

        $slugs = (isset($data['slugs']) && !empty($data['slugs'])) ? $data['slugs'] : [];

        if (isset($data['email']) && $data['email'] != '') {
            $whereData[] = ['email', $data['email']];
        }

        if (isset($data['phone']) && $data['phone'] != '') {
            $whereData[] = ['phone', $data['phone']];
        }

        if (!empty($data)) {
            $partner = DBPartner::where($whereData)->first();

            if (!$partner) {
                $partner = DBPartner::create($data);
            }

            return $partner;
        }

        return false;

    }

    /**
     * Get Partner
     *
     * @param $partner_str
     *
     * @return bool|object
     */
    public function getPartner($partner_str)
    {

        $partner_id = 0;

        if (is_int($partner_str)) {
            $partner_id = $partner_str;
        } else {
            $results = event(new GetPartner($partner_str));

            $uniques = array_values(array_unique($results));

            if ($uniques[0] == '') {
                print_r('No Partner Found');
            } else if (count($uniques) != 1) {
                print_r('multiple Partners');
            } else {
                $partner_id = $uniques[0];
            }
        }

        if (is_int($partner_id) && $partner_id) {
            $partner = DBPartner::where('id', $partner_id)->first();
            return $partner;
        }

        return false;

    }

    /**
     * Fetch Partner
     *
     * @param array $data
     *
     * @return object|bool
     */

    public function fetchPartner($data)
    {
        return $this->createPartner($data);
    }

}
