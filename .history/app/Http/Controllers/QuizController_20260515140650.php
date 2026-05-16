<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Quiz;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    //
    function showQuiz(){
        $quizzes = Quiz::get();
        $categories = Category::get();
        return view('quizzes',compact('quizzes', 'categories'));
    }
    function addQuiz(Request $request){
        $request->validate([
            'name'=>'required|min:3|unique:quizzes,name',
            'category_id' => 'required|exists:categories,id',
        ]);

        $quiz = new Quiz();
        $quiz->name = $request->name;
        $quiz->category_id = $request->category_id;

        if($quiz->save()){
            return redirect('/quizzes');
        }
    }
    function showEdit($id){
        $quiz =Quiz::findOrFail($id);
        $categories =Category::all();
        return view('editQuiz',compact('quiz','categories'));

    }
    function updateQuiz(Request $request,$id){
        $request->validate([
            'name'=>'required|min:3|unique:quizzes,name'.$id,
            'category_id'=>'required|exists:categories,id'.$id,
        ]);


        $quiz = Quiz::findOrFail($id);
        $quiz->name = $request->name;
        $quiz->category_id = $request->category_id;
        if ($quiz->save()) {
            return redirect('/quizzes');
        }
    }
    function deleteQuiz($id){
        $quiz = Quiz::findOrFail($id);
        $quiz->delete();
        return redirect('/quizzes');
    }
}
