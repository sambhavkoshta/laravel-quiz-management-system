<?php

namespace App\Http\Controllers;

use App\Models\Mcqs;
use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class McqController extends Controller
{

    function showMCQ($id)
    {
        $quiz = Quiz::findOrFail($id);
        $mcqs = $quiz->mcqs;
        return view('Mcqs', compact('mcqs', 'quiz'));
    }

    function addMCQ(Request $request, $id)
    {
        $request->validate([
            'question' => 'required|min:6|unique:mcqs,question',
            'option_a' => 'required|min:3',

            'option_b' => 'required|min:3',

            'option_c' => 'required|min:3',

            'option_d' => 'required|min:3',

            'correct_answer' => 'required',

        ]);

        $quiz = Quiz::findOrFail($id);

        $mcq = new Mcqs();

        $mcq->question = $request->question;

        $mcq->option_a = $request->option_a;

        $mcq->option_b = $request->option_b;

        $mcq->option_c = $request->option_c;

        $mcq->option_d = $request->option_d;

        $mcq->correct_answer = $request->correct_answer;

        $mcq->quiz_id = $quiz->id;

        if ($mcq->save()) {

            Session::flash('success', 'MCQ Added Successfully');

            return redirect('/mcqs/' . $quiz->id);
        }
    }
}
