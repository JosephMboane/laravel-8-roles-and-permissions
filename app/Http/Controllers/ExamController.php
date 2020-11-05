<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\User;
use Illuminate\Http\Request;
use PDF;
class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
         $this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index','show']]);
         $this->middleware('permission:product-create', ['only' => ['create','store']]);
         $this->middleware('permission:product-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:product-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $exams = Exam::with('user')->latest()->paginate(5);
        return view('exams.index',compact('exams'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::pluck('name','id');
        return view('exams.create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'name' => 'required',
//            'detail' => 'required',
            'user_id' => 'required'
        ]);

                Exam::create($request->all());

//        $input = $request->all();
//        $user_id = $request->input('user_id');
//
//        $exam = Exam::create($input,$user_id);


        return redirect()->route('exams.index')
                        ->with('success','Exam created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $exam
     * @return \Illuminate\Http\Response
     */
    public function show(Exam $exam)
    {
        $users = User::pluck('name','id');

        return view('exams.show',compact('exam','users'));
    }

//    public function showPDF(Exam $exam)
    public function showPDF($id)
    {
        $exam = Exam::find($id);
        $users = User::pluck('name','id');

        return view('exams.myPDF',compact('exam','users'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $exam
     * @return \Illuminate\Http\Response
     */
    public function edit(Exam $exam)
    {
        $users = User::pluck('name','id');
        return view('exams.edit',compact('exam','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $exam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exam $exam)
    {
         request()->validate([
            'name' => 'required',
            'detail' => 'required',
            'status' => 'required',
        ]);

        $exam->update($request->all());

        return redirect()->route('exams.index')
                        ->with('success','Exam updated successfully');
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
        $users = User::with('exams')->get();
        $pdf = PDF::loadView('exams.myPDF');
        return $pdf->download('itsolutionstuff.pdf',compact('users'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $exam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exam $exam)
    {
        $exam->delete();

        return redirect()->route('exams.index')
                        ->with('success','Exam deleted successfully');
    }
}
