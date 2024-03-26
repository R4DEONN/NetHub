<?php

namespace App\Controller;

use App\View\Plan\PlanListPageView;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class PlanController extends AbstractController
{
    public function __construct()
    {}

    public function getPlanListPage(): Response
    {
        $view = new PlanListPageView();
        return $this->render($view->getTemplate(), $view->asAssoc());
    }

}