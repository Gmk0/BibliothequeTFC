<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TravailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //     return [
            "sujet" => $this->faker->realText(50, 2),
            "categorie" => $this->faker->randomElement(array('TFC', 'MEMOIRE', 'THESE')),
            "faculte" => $this->faker->randomElement(array('SCIENCES INFORMATIQUE', 'ECONOMIE', 'DROIT', "COMMUNICATION SOCIAL")),
            "etudiant" => $this->faker->name,
            "annnee_etudes" => $this->faker->numberBetween(2010, 2022),
            "nbrs_pages"
            => $this->faker->numberBetween(80, 120),
            "path_document" => "travail.pdf",
            "status" => 1,
            "viewCounter" => 0,

        ];
    }
}
