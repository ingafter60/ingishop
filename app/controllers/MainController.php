<?php

namespace app\controllers;

use ishop\Cache;

class MainController extends AppController {

    public function indexAction(){
        
        $this->setMeta('Home Page', 'Description...', 'Keyword...');

        $brands = \R::find('brand');
        $hits   = \R::find('product', "hit = '1' AND status = '1' LIMIT 8 ");
        $this->set(compact('brands', 'hits'));
    }

}