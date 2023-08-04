<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function UserChart() {
        $users = User::selectRaw('MONTH(created_at) as month, COUNT(*) as count')
                        ->whereYear('created_at', date('Y'))
                        ->groupBy('month')
                        ->orderBy('month')
                        ->get();

        $data = [];
        $colors = ["#003366", "#E6E6FA", "50C878", "#FFDAB9", "#FFD700", "#FF6F61", "#D10047", "#DAA520", "#CC5500", "#FF7518", "#986960", "C0C0C0"];

        for ($i=1; $i < 12; $i++) {
            $month = date('F', mktime(0,0,0,$i,1));
            $count = 0;

            foreach($users as $user) {
                if ($user->month == $i){
                    $count = $user->count;
                    break;
                }
            }

            array_push($data, $count);
        }

        $datasets = [
            [
                'label' => "Users",
                'data' => $data,
                'backgroundColor' => $colors
            ]
        ];

        return compact('datasets', 'labels');
    }
}
