<?php
require '../functions/displayPokemon.php';

use PHPUnit\Framework\TestCase;

class displayPokemonTest extends TestCase{

    public function testSuccessDisplayPokemon(){
        $input = [["nickname" => NULL, "hasNickname" => 0, "species" => "Bulbasaur", "gender" => '1',
            "pokemon-image" => "https://img.pokemondb.net/sprites/home/normal/bulbasaur.png",
            "type1name" => "Grass", "type1image" => "https://archives.bulbagarden.net/media/upload/7/74/GrassIC_Big.png",
            "type2name"=> "Poison", "type2image" => "https://archives.bulbagarden.net/media/upload/3/3d/PoisonIC_Big.png"]];

        $expected = "<div><img src='https://img.pokemondb.net/sprites/home/normal/bulbasaur.png' alt='Bulbasaur'><div class='species'>Bulbasaur &#9792;</div><div><img src='https://archives.bulbagarden.net/media/upload/7/74/GrassIC_Big.png' alt='Grass'><img src='https://archives.bulbagarden.net/media/upload/3/3d/PoisonIC_Big.png' alt='Poison'></div></div>";

        $case = displayPokemon($input);

        $this->assertEquals($expected, $case);
    }

    public function testSuccessEmptyDisplayPokemon(){
        $input = [];

        $expected = "No Pokemon in Collection";

        $case = displayPokemon($input);

        $this->assertEquals($expected, $case);
    }

    public function testMalformedDisplayPokemon(){
        $input = false;

        $this->expectException(TypeError::class);

        displayPokemon($input);
    }

}