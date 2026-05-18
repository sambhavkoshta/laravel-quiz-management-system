<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Quiz;
use App\Models\Option;
use Illuminate\Http\Request;

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
        return view('startQuiz',compact('quiz','mcqs'));
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

        return view('result', compact('score', 'quiz', 'mcqs'));
    }
}
