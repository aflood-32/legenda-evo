<?php
namespace EvolutionCMS\Legenda\Controllers;


class ServiceController extends BaseController
{
    public function render()
    {
        $this->data['service_text'] = $this->evo->parseDocumentSource($this->evo->documentObject['service-text']['1']);
    }
}
