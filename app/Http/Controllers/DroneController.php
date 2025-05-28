<?php

namespace App\Http\Controllers;

use App\Helpers\Utils;


class DroneController extends Controller
{
    public function level1()
    {
        return Utils::finalHeightOfTheDrone('level1_1.in');
    }

    public function level2()
    {
        return Utils::finalHeightOfTheDrone('level1_2.in');
    }

    public function level3()
    {
        return Utils::finalHeightOfTheDrone('level1_3.in');
    }

    public function level4()
    {
        return Utils::finalHeightOfTheDrone('level1_4.in');
    }

    public function level5()
    {
        return Utils::finalHeightOfTheDrone('level1_4.in');
    }
}
