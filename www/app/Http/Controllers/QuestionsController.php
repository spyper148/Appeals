<?php

namespace App\Http\Controllers;

use App\Enums\StatusEnum;
use App\Models\Questions;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class QuestionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $questions = Questions::all();
        return view('questions.index',compact('questions'),);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
        return \view('questions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        $request->validate([
            'question'=>'required'
        ]);
        Questions::query()->create([
            'question'=>$request->question,
            'user'=>$request->user ?? 'Аноним',
            'status' => StatusEnum::NEW
        ]);
        return redirect()->route('questions.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Questions $questions)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Questions $question)
    {
        return \view('admin.answer',compact('question'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Questions $question)
    {
        $request->validate([
            'answer',
        ]);
        $question->answer = $request->answer;
        $question->status = StatusEnum::ANSWERED;
        $question->save();
        return redirect()->route('admin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Questions $questions)
    {
        //
    }

    public function admin():View
    {
        $questions = Questions::all();
        return \view('admin.index',compact('questions'));
    }
}
