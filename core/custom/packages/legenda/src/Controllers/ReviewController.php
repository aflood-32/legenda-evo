<?php
namespace EvolutionCMS\Legenda\Controllers;


class ReviewController extends BaseController
{
    public function render()
    {
        $this->data['pagebuilder'] = $this->evo->runSnippet('PageBuilder', [
            'container' => 'Review',
            'renderTo' => 'array'
        ])[0];
    }
}
