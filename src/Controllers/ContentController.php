<?php

namespace emb\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Http\Request;
use Plenty\Plugin\Templates\Twig;
use emb\Contracts\embRepositoryContract;

/**
 * Class ContentController
 * @package ToDoList\Controllers
 */
class ContentController extends Controller
{
    /**
     * @param Twig                   $twig
     * @param ToDoRepositoryContract $toDoRepo
     * @return string
     */
    public function showEmb(Twig $twig, embRepositoryContract $embRepo): string
    {
        $emb = $embRepo->getEmbList();
        $templateData = array("tasks" => $embList);
        return $twig->render('emb::content.emb', $templateData);
    }

    /**
     * @param  \Plenty\Plugin\Http\Request $request
     * @param ToDoRepositoryContract       $toDoRepo
     * @return string
     */
    public function createEmb(Request $request, embRepositoryContract $embRepo): string
    {
        $newEmb = $embRepo->createTask($request->all());
        return json_encode($newEmb);
    }
}
