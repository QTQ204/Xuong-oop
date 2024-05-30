<?php

namespace Quang\Xuongoop\Commons;
use use eftec\bladeone\BladeOne;


class Controller{
      protected function renderViewClient($view, $data){
        $templatePath = __DIR__ .'/../../View/Client';
        $compiledPath = __DIR__ .'/../../View/Compiles';

        $bladeOne = new BladeOne($templatePath, $compiledPath);

        
        
        echo $bladeOne->run($view, $data);
       }
      protected function renderView($view, $data){
        $templatePath = __DIR__ .'/../../View/Client';
        $compiledPath = __DIR__ .'/../../View/Compiles';

        $bladeOne = new BladeOne($templatePath, $compiledPath);

        
        
        echo $bladeOne->run($view, $data);


      }
}