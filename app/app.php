<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app){
        return $app['twig']->render('form.twig');
    });

    $app->get("/view_count", function() use ($app){

        $form_string = $_GET['input_string'];
        $form_word = $_GET['search_word'];
        if(empty($_GET['input_string']) && ($_GET['search_word']))
        {
            $result = "You should enter string and a word to search";
            return $app['twig']->render('error.twig', array("error"=>$result));

        }
        elseif(empty($form_string))
        {
            $result = "You should enter string ";
            return $app['twig']->render('error.twig', array("error"=>$result));
        }
        elseif(empty($form_word))
        {
            $result = "You should enter a word to find match";
            return $app['twig']->render('error.twig', array("error"=>$result));
        }

        else
        {
            $new_repeatCounter = new Repeatcounter;
            $result = $new_repeatCounter->countRepeats($form_string, $form_word);
            return $app['twig']->render('results.twig', array("count"=>$result));
        }
    });

    return $app;

?>
