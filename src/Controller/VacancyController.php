<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class VacancyController implements TokenAuthenticatedController
{
    public function create()
    {
        $request = Request::createFromGlobals();
        $reqBody = json_decode($request->getContent(), true);
        if ($this->isValid($reqBody)) {
            return new JsonResponse(['id' => 10]);
        }
        return new Response('Invalid Data', 422);
    }

    public function update($id)
    {
        $request = Request::createFromGlobals();
        $reqBody = json_decode($request->getContent(), true);
        if ($this->isValid($reqBody)) {
            return new JsonResponse([
                "title" => "Junior web developer",
                "description" => "Junior Web Developer / Full Stack Engineer (PHP JavaScript SQL Web). World-leading cyber security organisation is seeking a Junior Web Developer to join their 1000-strong international team and help protect the world against the growing number of adversaries in cyber space.",
                "minSalary" => 450,
                "maxSalary" => 700,
                "minExperience" => 1,
                "maxExperience" => 3,
                "companyId" => 1523
            ]);
        }
        return new Response('Invalid Data', 422);
    }

    public function delete($id)
    {
        return new Response('OK', 200);
    }

    private function isValid($data): bool
    {
        if (
            is_string($data['title']) && !empty($data['title']) &&
            is_string($data['description']) && !empty($data['description']) &&
            (is_float($data['minSalary']) || is_int($data['minSalary'])) &&
            (is_float($data['maxSalary']) || is_int($data['maxSalary'])) &&
            is_int($data['minExperience']) &&
            is_int($data['maxExperience']) &&
            is_int($data['companyId'])
        ) {
            return true;
        }
        return false;
    }
}