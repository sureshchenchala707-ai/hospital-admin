<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Models\OpVisit;
use Illuminate\Http\Request;

class OpController extends Controller
{   
    public function index(Request $request)
    {
        $query = OpVisit::with('patient', 'bill');

        if ($request->has('search') && $request->search != '') {
            $query->whereHas('patient', function($q) use ($request) {
                $q->where('name', 'like', '%' . $request->search . '%');
            });
        }

        $ops = $query->paginate(10);
        return view('op.index', compact('ops'));
    }
    public function create()
    {
        return view('op.create');
    }

    public function store(Request $request)
    {
        $patient = Patient::create($request->only('name','age','gender','phone'));

        $op = OpVisit::create([
            'patient_id' => $patient->id,
            'op_number' => 'OP'.time(),
            'doctor' => $request->doctor,
            'visit_date' => now()
        ]);

        return redirect('/bill/'.$op->id);
    }
}