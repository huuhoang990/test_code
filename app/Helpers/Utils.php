<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Storage;

class Utils
{
    public static function convertFileToArr($fileName)
    {
        $content = Storage::get($fileName);
        $lines = explode("\n", $content);
        $arr = [];

        for ($i=0; $i<count($lines); $i++) {
            if ($i === 0) {
                continue;
            }
            $line = trim($lines[$i]);
            $arr[] = array_map('intval', explode(" ", $line));
        }
        return $arr;
    }

    public static function finalHeightOfTheDrone($fileName)
    {
        $arr = Utils::convertFileToArr($fileName);
        $result = "";
        for ($i = 0; $i < count($arr); $i++) {
            $result .= array_sum($arr[$i])."<br>";
        }

        return $result;
    }
}
