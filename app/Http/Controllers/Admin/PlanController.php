<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Plan;
use Illuminate\Http\Request;

class PlanController extends Controller
{
    public function index()
    {
        $planes = Plan::orderBy('id', 'desc')->get();
        return view('admin.plan.index', compact('planes'));
    }
    public function planStore(Request $request)
    {
        $plan = new Plan();
        $plan->name = $request->name;
        $plan->duration = $request->duration;
        $plan->amount = $request->amount;
        $plan->currency = $request->currency;
        $plan->save();
        return back();
    }
    public function planEdit($id)
    {
        $plan = Plan::find($id);
        return view('admin.plan.edit', compact('plan'));
    }
    public function planUpdate(Request $request, $id)
    {
        $plan = Plan::find($id);
        $plan->name = $request->name;
        $plan->duration = $request->duration;
        $plan->amount = $request->amount;
        $plan->currency = $request->currency;
        $plan->save();
        return redirect()->route('admin.plan')->with('success', "Plan updated successfully!");
    }
    public function planDelete($id)
    {
        $plan = Plan::find($id);
        $plan->delete();
        return back()->with('success', "Plan deleted successfully!");
    }
}
