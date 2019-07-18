<?php
/**
 * Created by PhpStorm.
 * User: Dexter
 * Date: 19.07.2019
 * Time: 0:34
 */

namespace app;


class Siba implements Dog
{

    public function sound()
    {
        echo json_encode('Waf waf waf');
    }

    public function hunt()
    {
        echo json_encode('I killed a duck');
    }
}