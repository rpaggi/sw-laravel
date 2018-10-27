<?php

namespace App\Core;

use App\Character;


class StarWarsApi{
    private $getNextPeoples = '';
    private $getPreviousPeoples = '';

    public static function getPeoples($pagination = null){
        $url = 'https://swapi.co/api/people';

        if($pagination){
            $url = $url . '?page=' . $pagination;
        }

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, 1);

        $response = json_decode(curl_exec($curl));

        $return = new \stdClass;
        $return->hasNext = $response->next ? true : false;
        $return->hasPrev = $response->previous ? true : false;
        $return->pagesTotal = ceil($response->count / 10);
        $return->data = array();

        foreach($response->results as $people){
            $character = new Character;
            $character->setName($people->name);
            $character->setHeight($people->height);
            $character->setMass($people->mass);
            $character->setHairColor($people->hair_color);
            $character->setSkinColor($people->skin_color);
            $character->setEyeColor($people->eye_color);
            $character->setBirthYear($people->birth_year);
            $character->setGender($people->gender);

            $return->data[] = $character;
        }

        return $return;
    }
}
