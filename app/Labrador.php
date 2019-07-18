<?php
/**
 * Created by PhpStorm.
 * User: Dexter
 * Date: 19.07.2019
 * Time: 0:43
 */

namespace app;


class Labrador implements Dog
{

    public function sound()
    {
        echo json_encode('Piiiisk');
    }

    public function hunt()
    {
        Route::Error();
    }
}