<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\User;

class MonthlyUserChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {

        $users = User::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
                        ->whereYear('created_at', date('Y'))
                        ->groupBy('month')
                        ->orderBy('month')
                        ->get();

        $label = [];
        $data = [];
        for ($i=1; $i < 12; $i++) {
            $month = date('F', mktime(0,0,0,$i,1));
            $count = 0;

            foreach($users as $user) {
                if ($user->month == $i){
                    $count = $user->count;
                    break;
                }
            }

            array_push($label, $month);
            array_push($data, $count);
        }

        return $this->chart->barChart()
            ->addData('Total Users', $data)
            ->setXAxis(['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']);
    }
}
