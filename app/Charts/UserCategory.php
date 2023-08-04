<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\User;

class UserCategory
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {

        $userType = User::get();

        $data = [
            $userType->where('type', 0)->count(),
            $userType->where('type', 1)->count(),
            $userType->where('type', 2)->count()
        ];

        return $this->chart->donutChart()
            // ->setTitle('Top 3 scorers of the team.')
            // ->setSubtitle('Season 2021.')
            ->addData($data)
            ->setLabels(['Unregistered User', 'Registered User', 'Librarian']);
    }
}
