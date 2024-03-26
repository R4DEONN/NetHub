<?php

namespace App\View\Plan;

class PlanListPageView
{
    public function getTemplate(): string
    {
        return 'plan/planList.twig';
    }

    public function asAssoc(): array
    {
        return [];
    }
}