<?php
/**
 * Created by PhpStorm.
 * User: Niklas
 * Date: 13.11.2017
 * Time: 11:36
 */

namespace HTL3R\KungFuMovies;

//use Endroid\QrCode\QrCode;

class Filmausgabe extends \HTL3R\KungFuMovies\AbstractKungFuMovie implements \HTL3R\KungFuMovies\IKungFuMovie
{

    public function getMovieInfoAsJSON(): string
    {
        header('Content-Type: application/json');
        return '{"Name":"'.$this->getName().'", "Rating":"'.$this->getRating().'", "URI":"'.$this->getMovieURI().'"}';
    }

    public function getMovieQRCodeForBrowser(): string
    {
        $temp = new QrCode($this->getMovieURI());

        header('Content-Type: '.$temp->getContentType());
        return $temp->writeString();

    }

    public function __construct($name, $rating, $movieURI)
    {
        parent::__construct($name, $rating, $movieURI);
    }
}