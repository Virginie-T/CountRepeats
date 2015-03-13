<?php 

	require_once __DIR__."/../vendor/autoload.php";
	require_once __DIR__."/../src/CountRepeats.php";

	$app = new Silex\Application();

	$app->register(new Silex\Provider\TwigServiceProvider(), array(
		'twig.path' => __DIR__."/../views"
	));

	$app->get('/', function() use ($app) {
		return $app['twig']->render('form.twig');
	});

	$app->get('/result', function() use ($app) {
		$count_repeats_new = new CountRepeats;
		$score = $count_repeats_new->count_repeats($_GET['string'], $_GET['find']);

		return $app['twig']->render('result_score.twig', array('result' => $score, 'thestring' => $_GET['string'], 'findword' => $_GET['find']));

	});

	return $app;


?>