<?php

namespace App\Http\Middleware;

use Closure;
use MobilRedirect;
use use Mobile_Detect;;
use Illuminate\Http\Request;

class MobilRedirect
{
    /**
     * Обрабатывать входящий запрос.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

          $detect = new Mobile_Detect;

          if ($detect->isMobile()) var_dump('is mobile');
          else var_dump('is not mobile');
          
          if($detect->isAndroidOS()){
              echo "Андроид-устройство версии: ".$detect->version('Android');
            }
            if($detect->isiOS()){
              echo "IOS-устройство версии: ".$detect->version('iOS');
            }
            if ($detect->isMobile()) {
              echo '<br />Вы зашли с мобильного';
            }
            if($detect->isTablet()){
              echo '<br />Вы зашли с планшета';
            }
            if ($detect->isLG()) {
              echo '<br />Ваш смартфон LG';
            }
            if ($detect->isSamsung()) {
              echo '<br />Ваш смартфон Samsung';
            }
  

        // return $next($request);
    }
}
