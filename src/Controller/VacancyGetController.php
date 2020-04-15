<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;

class VacancyGetController
{
    public function get($id)
    {
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
}