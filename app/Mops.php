<?php
/**
 * Created by PhpStorm.
 * User: Dexter
 * Date: 19.07.2019
 * Time: 0:28
 */

namespace app;


class Mops implements Dog
{

    public function sound()
    {
        echo json_encode('Wof wof wof');
    }

    public function hunt()
    {
        echo json_encode('Lazy');
    }
}