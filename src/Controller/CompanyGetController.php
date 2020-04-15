<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class CompanyGetController
{
    public function get($id)
    {
        return new JsonResponse([
            "title" => "Google",
            "description" => "Google is a multinational, publicly-traded organization  built around the company's hugely popular search engine. Google's other enterprises include Internet analytics, cloud computing, advertising technologies, and Web app, browser and operating system development."
        ]);
    }

    public function getVacancies($id)
    {
        return new JsonResponse([[
            "title" => "Junior web developer",
            "description" => "Junior Web Developer / Full Stack Engineer (PHP JavaScript SQL Web). World-leading cyber security organisation is seeking a Junior Web Developer to join their 1000-strong international team and help protect the world against the growing number of adversaries in cyber space.",
            "minSalary" => 450,
            "maxSalary" => 700,
            "minExperience" => 1,
            "maxExperience" => 3,
            "companyId" => 1523
        ]]);
    }

    public function getCompanies()
    {
        return new JsonResponse([[
            'id' => 1,
            "title" => "Google",
            "description" => "Google is a multinational, publicly-traded organization  built around the company's hugely popular search engine. Google's other enterprises include Internet analytics, cloud computing, advertising technologies, and Web app, browser and operating system development."
        ]]);
    }
}