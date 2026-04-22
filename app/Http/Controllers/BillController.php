<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\OpVisit;
use Illuminate\Http\Request;

class BillController extends Controller
{
    public function create($id)
    {
        $op = OpVisit::with('patient')->findOrFail($id);
        return view('bill.create', compact('op'));
    }

    public function store(Request $request)
{
    $consult = intval($request->consultation_fee);
    $lab = intval($request->lab_fee);
    $med = intval($request->medicine_fee);
    $total = $consult + $lab + $med;

    Bill::create([
        'op_id' => $request->op_id,
        'consultation_fee' => $consult,
        'lab_fee' => $lab,
        'medicine_fee' => $med,
        'total' => $total
    ]);

    return redirect('/bill/print/'.$request->op_id);
}

    public function print($id)
    {
        $op = OpVisit::with('patient','bill')->findOrFail($id);
        return view('bill.print', compact('op'));
    }
}