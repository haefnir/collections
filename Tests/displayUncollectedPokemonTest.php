<?php
require '../functions/displayUncollectedPokemon.php';

use PHPUnit\Framework\TestCase;

class displayUncollectedPokemonTest extends TestCase{

    public function testSuccessDisplayUncollectedPokemon(){
        $input = ["dex number" => '001', "species" => "Bulbasaur",
            "pokemon-image" => "https://img.pokemondb.net/sprites/home/normal/bulbasaur.png",
            "type1name" => "Grass", "type1image" => "https://archives.bulbagarden.net/media/upload/7/74/GrassIC_Big.png",
            "type2name"=> "Poison", "type2image" => "https://archives.bulbagarden.net/media/upload/3/3d/PoisonIC_Big.png"];

        $expected = "<div><img src='https://img.pokemondb.net/sprites/home/normal/bulbasaur.png' alt='Bulbasaur'><div class='species'>Bulbasaur</div><div class='dexNumber'> #001</div><div><img src='https://archives.bulbagarden.net/media/upload/7/74/GrassIC_Big.png' alt='Grass'><img src='https://archives.bulbagarden.net/media/upload/3/3d/PoisonIC_Big.png' alt='Poison'></div></div>";

        $case = displayUncollectedPokemon($input);

        $this->assertEquals($expected, $case);
    }

    public function testSuccessEmptyDisplayUncollectedPokemon(){
        $input = [];

        $expected = "";

        $case = displayUncollectedPokemon($input);

        $this->assertEquals($expected, $case);
    }

    public function testMalformedDisplayUncollectedPokemon(){
        $input = false;

        $this->expectException(TypeError::class);

        displayUncollectedPokemon($input);
    }

}