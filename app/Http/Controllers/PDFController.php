<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

//    public function generatePDF()
//    {
//        $data = [
//            'title' => 'Joaquim Chaves Saude',
//            'date' => date('m/d/Y')
//        ];
//
//        $pdf = PDF::loadView('myPDF', $data);
//
//        return $pdf->download('itsolutionstuff.pdf');
//    }
    public function preview()
    {
        return view('myPDF');
    }
    public function download()
    {
//        $render = view('myPDF')->render();
//
//        $pdf = new Pdf;
//        $pdf->addPage($render);
//        $pdf->setOptions(['javascript-delay' => 5000]);
//        $pdf->saveAs(public_path('result.pdf'));
//
//        return response()->download(public_path('result.pdf'));
//
        $pdf = PDF::loadView('myPDF');
        return $pdf->download('itsolutionstuff.pdf');
    }

}
