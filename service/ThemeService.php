<?php

class ThemeService
{

    private $brands;
    private $layouts;

    public function __construct()
    {
        $this->brands = array(
            array(
                "id" => "aviator",
                "name" => "Aviator"
            ),
            array(
                "id" => "blueberry",
                "name" => "Blueberry"
            ),
            array(
                "id" => "cake",
                "name" => "Cake"
            ),
            array(
                "id" => "caribbean",
                "name" => "Caribbean"
            ),
            array(
                "id" => "celeste",
                "name" => "Celeste"
            ),
            array(
                "id" => "clouds",
                "name" => "Clouds"
            ),
            array(
                "id" => "diable",
                "name" => "Diable"
            ),
            array(
                "id" => "eevee",
                "name" => "Eevee"
            ),
            array(
                "id" => "forest",
                "name" => "Forest"
            ),
            array(
                "id" => "graylord",
                "name" => "Graylord"
            ),
            array(
                "id" => "kino",
                "name" => "Kino"
            ),
            array(
                "id" => "lavandula",
                "name" => "Lavandula"
            ),
            array(
                "id" => "lemon",
                "name" => "Lemon"
            ),
            array(
                "id" => "lime-sports",
                "name" => "Lime Sports"
            ),
            array(
                "id" => "lollipop",
                "name" => "Lollipop"
            ),
            array(
                "id" => "mint",
                "name" => "Mint"
            ),
            array(
                "id" => "nature",
                "name" => "Nature"
            ),
            array(
                "id" => "paradise-orange",
                "name" => "Paradise Orange"
            ),
            array(
                "id" => "purple-skies",
                "name" => "Purple Skies"
            ),
            array(
                "id" => "reverse-sky",
                "name" => "Reverse Sky"
            ),
            array(
                "id" => "sky",
                "name" => "Sky"
            ),
            array(
                "id" => "spring-melody",
                "name" => "Spring Melody"
            ),
            array(
                "id" => "strawberry",
                "name" => "Strawberry"
            ),
            array(
                "id" => "wood",
                "name" => "Wood"
            )
        );
        $this->layouts = array(
            array(
                "id" => "l-grid-column",
                "name" => "[ ] [column] [ ]"
            ),
            array(
                "id" => "l-grid-column-full",
                "name" => "[    column    ]"
            )
        );
    }


    public function get_brands()
    {
        return $this->brands;
    }

    public function get_layouts()
    {
        return $this->layouts;
    }
}