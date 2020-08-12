<?php

namespace EvolutionCMS\Legenda\Controllers;

use Illuminate\Support\Facades\Cache;

//Базовый класс который занимается обработкой/кэшированием и прочими вещами.
class BaseController
{
    public $data = [];

    public function __construct()
    {
        $this->evo = EvolutionCMS();
        ksort($_GET);
        $cacheid = md5(json_encode($_GET));
        if ($this->evo->getConfig('enable_cache')) {
            $this->data = Cache::rememberForever($cacheid, function () {
                $this->globalElements();
                $this->render();
                return $this->data;
            });
        } else {
            $this->globalElements();
            $this->render();
        }
        $this->noCacheRender();
        $this->sendToView();
    }

    public function render()
    {

    }

    public function noCacheRender()
    {
    }

    public function globalElements()
    {
        $this->data['crumbs'] = json_decode($this->evo->runSnippet('DLCrumbs', [
            'api' => 1,
            'showCurrent' => 1
        ]), true);

        $this->data['meta'] = $this->getMeta();
        $this->data['menu'] = $this->getMenu();
        $this->data['common'] = $this->getCommon();
        $this->data['tiles'] = $this->getTiles();
    }

    public function getMenu()
    {
        $menu_items = json_decode($this->evo->runSnippet('DLMenu', [
            'parents' => '0',
            'api' => 1
        ]), true)[0];
        foreach ($menu_items as $key => $item) {
            if ($item['id'] == 51) {
                foreach ($item['children'] as $key2 => $children) {
                    $menu_items[$key]['children'][$key2]['icon'] = $this->evo->getTemplateVars(['service-icon'], '*', $children['id'])[0]['value'];
                }
            }
        }
        return $menu_items;
    }

    public function getCommon()
    {
        $common_items = [
            'site_logo' => $this->evo->getConfig('client_site_logo'),
            'favicon' => $this->evo->getConfig('client_favicon'),
            'phone' => $this->evo->getConfig('client_phone'),
            'phone1' => $this->evo->getConfig('client_phone_1'),
            'phone2' => $this->evo->getConfig('client_phone_2'),
            'address' => $this->evo->getConfig('client_address'),
            'email' => $this->evo->getConfig('client_email'),
            'footer_text' => $this->evo->getConfig('client_footer_text'),
        ];
        return $common_items;
    }

    public function getMeta()
    {
        $meta = [
            'title' => $this->evo->parseDocumentSource($this->evo->documentObject['titl']['1']),
            'desc' => $this->evo->parseDocumentSource($this->evo->documentObject['desc']['1']),
            'keyw' => $this->evo->parseDocumentSource($this->evo->documentObject['keyw']['1']),
            'noIndex' => $this->evo->parseDocumentSource($this->evo->documentObject['noIndex']['1']),
        ];
        return $meta;
    }

    public function getTiles()
    {
        $tiles = [
            'title' => $this->evo->getConfig('client_heading'),
            'items' => json_decode($this->evo->getConfig('client_items'), true),
        ];
        return $tiles;
    }

    public function sendToView()
    {
        $this->evo->addDataToView($this->data);
    }

    public function runDocLister(array $data)
    {
//        $data['controller']   = 'lang_content';
        $data['saveDLObject'] = '_DL';
        $this->evo->runSnippet('DocLister', $data);
        $_DL = $this->evo->getPlaceholder('_DL');
        return $_DL->docsCollection()->toArray();
    }
}
