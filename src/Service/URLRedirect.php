<?php

namespace App\Service;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class URLRedirect
{
    public function index(Request $request)
    {
        $url = $request->get('url');

        return $this->render(
            'base/redirect.html.twig',
            ['url' => $url],
            $this->redirectAway($url)
        );
    }

    public function redirectAway($url)
    {
        $response = new Response();
        $response->setStatusCode(200);
        $response->headers->set('Refresh', '5; url=https://' . $url);
        return $response;
    }
}