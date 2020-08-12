<?php
namespace EvolutionCMS\Legenda\Controllers;


class MainController extends BaseController
{
    public function render()
    {
        $this->data['pagebuilder'] = $this->evo->runSnippet('PageBuilder', [
            'container' => 'MainContent',
            'renderTo' => 'array'
        ])[0];
    }
}
