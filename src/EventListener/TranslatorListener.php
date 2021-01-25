<?php

namespace App\EventListener;


use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Contracts\Translation\TranslatorInterface;

class TranslatorListener
{
    public function onKernelRequest(RequestEvent $event)
    {

        $request = $event->getRequest();

        $pathInfo = $request->getPathInfo();

        if($pathInfo == "/translate"){

            dump($request->getLocale());
            die();

            $translator->setLocale("en");

            dump($translator);
            die();

            if($request->getLocale() == "es"){
                $request->setLocale("en");
            }
            else{
                $request->setLocale("es");
            }

        }
    }

}