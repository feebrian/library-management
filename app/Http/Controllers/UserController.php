<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\CssSelector\Node\FunctionNode;
use App\Charts\MonthlyUserChart;
use App\Charts\UserCategory;

class UserController extends Controller
{

    /**
     * To display all data
     */
    public function Index(MonthlyUserChart $monthlyUserChart, UserCategory $userCategory) {
        $users = User::paginate(5);
        $title = 'Members';
        $chartUserMonthly = $monthlyUserChart->build();
        $chartUserCategory = $userCategory->build();
        return view('dashboard.members', compact('title', 'users', 'chartUserMonthly', 'chartUserCategory'));
    }

    /**
     * To display form to create new data
     */
    public function Create() {
        //
    }

    /**
     * Logic to store data into database
     */
    public function Store() {
        //
    }

    /**
     * To get specified data
     */
    public function Show() {
        //
    }

    /**
     * To display form to edit data
     */
    public function Edit() {
        //
    }

    /**
     * Logic to update data
     */
    public function Update() {
        //
    }

    /**
     * Logic to delete data
     */
    public function Destroy() {
        //
    }

    public function UserChart() {

    }

}
