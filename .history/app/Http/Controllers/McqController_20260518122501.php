<?php

namespace App\Http\Controllers;

use App\Models\Mcqs;
use App\Models\Quiz;
use App\Models\Option;
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
            'options'=>'required|array|min:2',
            'options.*'=>'required|min:1',
            'correct_answer' => 'required',
        ]);

        $quiz = Quiz::findOrFail($id);
        $mcq = new Mcqs();
        $mcq->question = $request->question;
        $mcq->quiz_id = $quiz->id;

        foreach($request->options as $key=>$option){
            Option ::cr
        }
        if ($mcq->save()) {
            return redirect('/mcqs/' . $quiz->id);
        }
    }

    function showEdit($id){
        $mcq = Mcqs::findOrFail($id);
        return view('editMcqs',compact('mcq'));
    }

    function updateMCQ(Request $request, $id){
        $request->validate([
            'question'=>'required|min:5|unique:mcqs,question,'.$id,
            'option_a'=>'required|min:3',
            'option_b'=>'required|min:3',
            'option_c'=>'required|min:3',
            'option_d'=>'required|min:3',
            'correct_answer'=>'required',
        ]);

        $mcq = Mcqs::findOrFail($id);
        $mcq->question = $request->question;
        $mcq->option_a = $request->option_a;
        $mcq->option_b = $request->option_b;
        $mcq->option_c = $request->option_c;
        $mcq->option_d = $request->option_d;
        $mcq->correct_answer = $request->correct_answer;
        if ($mcq->save()) {
            return redirect('/mcqs/' . $mcq->quiz_id);
        }
    }

    function deleteMCQ($id){
        $mcq = Mcqs::findOrFail($id);
        $quiz = $mcq->quiz_id;
        $mcq->delete();
        return redirect('/mcqs/'.$quiz);
    }
}
