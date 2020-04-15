<?php


namespace App\Controller;

use App\Controller\TokenAuthenticatedController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class CompanyController implements TokenAuthenticatedController
{

    public function create()
    {
        $request = Request::createFromGlobals();
        $reqBody = json_decode($request->getContent(), true);
        if ($this->isValid($reqBody)) {
            return new JsonResponse(['id' => 10]);
        }
        return new Response('Invalid data', 422);
    }

    public function update($id)
    {
        $request = Request::createFromGlobals();
        $reqBody = json_decode($request->getContent(), true);
        if ($this->isValid($reqBody)) {
            return new JsonResponse([
                "title" => "Google",
                "description" => "Google is a multinational, publicly-traded organization  built around the company's hugely popular search engine. Google's other enterprises include Internet analytics, cloud computing, advertising technologies, and Web app, browser and operating system development."
            ]);
        }
        return new Response('Invalid data', 422);
    }

    public function delete($id)
    {
        return new Response('OK', 200);
    }

    private function isValid($data): bool
    {
        if (
            is_string($data['title']) && !empty($data['title']) &&
            is_string($data['description']) && !empty($data['description'])
        ) {
            return true;
        }
        return false;
    }
}