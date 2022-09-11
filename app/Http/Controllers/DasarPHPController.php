<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DasarPHPController extends Controller
{
    public function fizzBuzz()
    {
        for ($i = 1; $i <= 100; $i++) {
            // multiple 3 & 5: rectangle area w/ length $i divided by 3 and width $i divided by 5
            if ($i % 3 === 0 && $i % 5 === 0) {
                $length = $i / 3;
                $width = $i / 5;
                echo (sprintf('%.2f', round($length * $width, 2)) . '<br>');
                continue;
            }
            // multiple 3: circle area w/ radius $i divided by 3
            if ($i % 3 === 0) {
                $radius = $i / 3;
                echo (sprintf('%.2f', round(pi() * $radius ** 2, 2)) . '<br>');
                continue;
            }
            // multiple 5: circle circumference w/ radius $i divided by 5
            if ($i % 5 === 0) {
                $radius = $i / 5;
                echo (sprintf('%.2f', round(2 * pi() * $radius, 2)) . '<br>');
                continue;
            }

            echo (sprintf('%.2f', $i) . '<br>');
        }
    }
}
