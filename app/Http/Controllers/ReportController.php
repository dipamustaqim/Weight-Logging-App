<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;

class ReportController extends Controller
{
    public function index()
    {
        $reports = Report::get();

        return view('report.index', compact('reports'));
    }

    public function create(Request $req)
    {
        $report = Report::create([
            'min' => $req->min,
            'max' => $req->max,
            'variance' => $req->variance
        ]);

        return redirect()->back();
    }

    public function new()
    {
    	return view('report.new');
    }

    public function edit($report_id)
    {
        $report = Report::find($report_id);
        return view('report.edit', compact('report'));
    }

    public function update(Request $req, $report_id)
    {
        $report = Report::find($report_id);
        $report->min = $req->min;
        $report->max = $req->max;
        $report->variance = $req->variance;
        $report->update();

        return redirect('/');
    }

    public function delete($report_id)
    {
        Report::where('id', $report_id)->delete();

        return redirect()->back();
    }

    public function show($report_id)
    {
        $report = Report::find($report_id);

        return view('report.show', compact('report'));
    }
}
