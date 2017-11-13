<?php
/**
 * Created by PhpStorm.
 * User: Niklas
 * Date: 13.11.2017
 * Time: 11:43
 */

require "vendor/autoload.php";

use HTL3R\KungFuMovies\Filmausgabe;

$film1 = new Filmausgabe("Bruce Lee - Der Mann mit der Todeskralle", 5, "https://www.youtube.com/watch?v=80wXmIcyZwk");

echo "<!DOCTYPE html>";
echo "<html lang="en">";
echo "<head>";
echo "<meta charset=\"UTF-8\">";
echo "<title>Title</title>";
echo "</head>";
echo "<body>";

    echo "<h1>Der Mann mit der Todeskralle</h1>";
    echo "<a href=".$film1.getMovieInfoAsJSON().">Filminfo als JSON</a>";
    echo "<a href=".$film1.getMovieQRCodeForBrowser().">Filminfo als QR-Code</a>";

echo "</body>";
echo "</html>";