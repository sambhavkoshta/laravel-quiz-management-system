<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Quiz;
use App\Models\Option;
use App\Models\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class StudentQuizController extends Controller
{
    //
    function showQuizzes($id){
        $category = Category::find($id);
        $quizzes = $category->quizzes;
        return view('studentQuizzes',compact('quizzes','category'));
    }

    function showCategories(){
        $categories = Category::get();
        return view('studentCategories',compact('categories'));
    }

    function startQuiz($id){
        $quiz = Quiz::findOrFail($id);
        $mcqs = $quiz->mcqs;
        $result = Result::findOrFail([
            'student_id'=> Session
        ])->first();
        if(!$result){
            return view('startQuiz',compact('quiz','mcqs'));
        }
        return redirect('/student/quizzes/'.$id);
    }
    function submitQuiz(Request $request, $id)
    {
        $quiz = Quiz::findOrFail($id);
        $mcqs = $quiz->mcqs;
        $score = 0;
        foreach ($mcqs as $mcq) {
            $selectedOptionId =
                $request->answers[$mcq->id] ?? null;
            $option = Option::find($selectedOptionId);
            if ($option && $option->is_correct) {
                $score++;
            }
        }

        Result::create([
            $student = Session::get('student'),
            'student_id' =>$student->id,
            'quiz_id' =>$quiz->id,
            'score' =>$score,
            'total_questions' =>$mcqs->count()
        ]);
        return view('result', compact('score', 'quiz', 'mcqs'));
    }

    function history(){
        $results = Result::where('student_id',Session::get('student')->id)->latest()->get();
        return view('history',compact('results'));
    }
}
