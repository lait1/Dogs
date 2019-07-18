<?php
/**
 * Created by PhpStorm.
 * User: Dexter
 * Date: 19.07.2019
 * Time: 0:40
 */

namespace app;


class Dachshund implements Dog
{

    public function sound()
    {
        echo json_encode('Woof! Wooof!');
    }

    public function hunt()
    {
        echo json_encode('I killed a mosquito');
    }
}