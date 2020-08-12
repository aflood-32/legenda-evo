<?php
namespace EvolutionCMS\Legenda\Controllers;


class ServicesController extends BaseController
{
    public function render()
    {
        $this->data['content'] = $this->runDocLister([
            'idType' => 'parents',
            'parents' => 51,
            'tvPrefix' => '',
            'tvList' => 'service-text',
            'api' => 1,
            'saveDLObject' => '_DL',
        ]);
    }
}
