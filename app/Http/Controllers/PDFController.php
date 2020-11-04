<?php
namespace App\Http\Controllers;
use App\Models\User;
use PDF;
class PDFController extends Controller
{
    // function to display preview
    public function preview()
    {
        return view('preview');
    }

    public function generatePDF()
    {
        $users = User::with('exams')->get();
        $pdf = PDF::loadView('preview');
        return $pdf->download('demo.pdf',compact('users'));
    }
}
