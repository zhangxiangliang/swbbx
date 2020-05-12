<?php

namespace App\Http\Controllers\Web;

use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Requests\QuestionRequest;

class QuestionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keywords =  $request->get('search', '') === '' ? [] : explode(' ', $request->search);

        $query = Question::query();

        foreach ($keywords as $keyword) {
            $query
                ->orWhere('answer', 'like', '%'. $keyword . '%')
                ->orWhere('question', 'like', '%'. $keyword . '%');
        }

        $questions = $query->paginate();

        return view('questions.index', compact('questions'));
    }
}
