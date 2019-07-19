<?php

namespace RDWOA;

use RDWOA\RDWAPI;

class RDW
{
    /**
     * Get
     *
     * @param string $license
     * @param string $data
     * @return mixed
     */
    public static function get($license, $data = 'info')
    {
        $client = new RDWAPI;

        return $client->get(
            strtoupper( str_replace('-', '', $license ) ), 
            $data
        );
    }
}