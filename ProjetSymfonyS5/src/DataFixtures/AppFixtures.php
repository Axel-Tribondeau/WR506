<?php
// src/DataFixtures/AppFixtures.php
namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Movie;
use App\Entity\Actor;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Xylis\FakerCinema\Provider\Movie as MovieProvider;
use Xylis\FakerCinema\Provider\Person as PersonProvider;
use App\Resources\MovieImages;
use App\Resources\ActorImages;

class AppFixtures extends Fixture
{
    private const IMAGE_BASE_URL = 'https://image.tmdb.org/t/p/original';
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();
        $faker->addProvider(new MovieProvider($faker));
        $faker->addProvider(new PersonProvider($faker));

        // Create categories using movie genres
        $categories = [];
        for ($i = 0; $i < 5; $i++) {
            $category = new Category();
            $category->setTitle($faker->movieGenre())
                ->setCreatedAt(new \DateTimeImmutable()); // Ajout de la date de création
            $manager->persist($category);
            $categories[] = $category; // Store categories for later association with movies
        }

        // Create movies and associate with categories
        for ($i = 0; $i < 10; $i++) {
            $movie = new Movie();
            $movie->setTitle($faker->movie())
                ->setDescription($faker->text)
                ->setReleaseDate($faker->dateTimeBetween('-20 years', 'now'))
                ->setDuration($faker->numberBetween(80, 180))
                ->setEntries($faker->numberBetween(100000, 1000000))
                ->setDirector($faker->director())
                ->setRating($faker->randomFloat(1, 0, 10))
                ->setMedia(self::IMAGE_BASE_URL . $faker->randomElement(MovieImages::MOVIE_IMAGE_PATHS))
                ->setCreatedAt(new \DateTimeImmutable());

            // Associate random categories with movies
            foreach ($faker->randomElements($categories, mt_rand(1, 3)) as $category) {
                $movie->addCategory($category);
            }

            $manager->persist($movie);

            // Create actors and associate with the movie
            for ($j = 0; $j < 3; $j++) {
                $actor = new Actor();
                $dob = $faker->dateTimeBetween('-70 years', '-18 years');
                $actor->setLastname($faker->lastName)
                    ->setFirstname($faker->firstName)
                    ->setDob($dob)
                    ->setDeathDate($faker->optional()->dateTimeBetween($dob, 'now'))
                    ->setAwards($faker->numberBetween(0, 10))
                    ->setBio($faker->paragraph)
                    ->setNationality($faker->country)
                    ->setGender($faker->randomElement(['male', 'female']))
                    ->setMedia(self::IMAGE_BASE_URL . $faker->randomElement(ActorImages::ACTOR_IMAGE_PATHS))
                    ->setCreatedAt(new \DateTimeImmutable());

                $actor->addMovie($movie);
                $manager->persist($actor);
            }
        }

        $manager->flush();
    }
}
