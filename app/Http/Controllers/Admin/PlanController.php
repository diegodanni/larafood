<?php

namespace App\Http\Controllers\Admin;
use App\Models\Plan;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    private $repository;
    public function __construct(Plan $plan)
    {
        $this->repository = $plan;
    }
    public function index()
    {
        $plans = $this->repository->paginate(1);
        return view('admin.pages.plans.index',[
            'plans'=>$plans,
        ]);
    }

}
