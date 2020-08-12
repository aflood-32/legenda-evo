<?php
namespace EvolutionCMS\Legenda\Controllers;


class AboutController extends BaseController
{
    public function render()
    {
        $this->data['about_menu'] = $this->getMenu()[0]['children'];
        $this->data['pagebuilder'] = $this->evo->runSnippet('PageBuilder', [
            'container' => 'AboutContent',
            'renderTo' => 'array'
        ])[0];
        $this->data['txt_block'] = $this->evo->parseDocumentSource($this->evo->documentObject['aboutTxt']['1']);
    }
}
