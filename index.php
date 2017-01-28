<?php 

require_once 'vendor/autoload.php';

$faker = Faker\Factory::create();

echo 'Test Faker : <br>';

echo $faker->name, "<br>";

echo $faker->address, "<br>";

echo $faker->text, "<br>";

for ($i = 0; $i < 10; $i++) {
	echo $faker->name, "<br>";
}

$loader = new Twig_Loader_Array(array('index' => '<div>Test Twig => Hello {{ name }}!</div>',));

$twig = new Twig_Environment($loader);

echo $twig->render('index', array('name' => 'Marine'));

?>