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
            'correct_option' => 'required',
        ]);

        $quiz = Quiz::findOrFail($id);

        $mcq = Mcqs ::create([
            'question' => $request->question,
            'quiz_id' => $quiz->id, 
        ]);

        foreach($request->options as $key=>$option){
            Option ::create([
                'mcq_id'=>$mcq->id,
                'option_text'=>$option,
                'is_correct'=>$request->correct_option ==$key,
            ]);
        }
        return redirect('/mcqs/' . $quiz->id);
    }

    function showEdit($id){
        $mcq = Mcqs::findOrFail($id);
        $options = Option::findOrFail($id);
        echo $options;
        return view('editMcqs',compact('mcq'));
    }

    public function updateMCQ(Request $request, $id)
    {
        $request->validate([
            'question' => 'required|min:5',
            'options' => 'required|array|min:2',
            'options.*' => 'required',
            'correct_option' => 'required'
        ]);

        $mcq = Mcqs::findOrFail($id);

        $mcq->update([
            'question' => $request->question
        ]);

        Option::where('mcq_id', $mcq->id)->delete();

        foreach ($request->options as $key => $option) {
            Option::create([
                'mcq_id' => $mcq->id,
                'option_text' => $option,
                'is_correct' => $request->correct_option == $key
            ]);
        }

        return redirect('/mcqs/' . $mcq->quiz_id);
    }

    function deleteMCQ($id){
        $mcq = Mcqs::findOrFail($id);
        $quiz = $mcq->quiz_id;
        $mcq->delete();
        return redirect('/mcqs/'.$quiz);
    }
}
