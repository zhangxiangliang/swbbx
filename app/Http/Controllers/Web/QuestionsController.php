<?php

namespace App\Http\Controllers\Web;

use App\Models\Question;
use Illuminate\Http\Request;
use App\Http\Requests\QuestionRequest;

class QuestionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

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

    public function show(Question $question)
    {
        return view('questions.show', compact('question'));
    }

    public function create(Question $question)
    {
        return view('questions.create_and_edit', compact('question'));
    }

    public function store(QuestionRequest $request)
    {
        $question = Question::create($request->all());
        return redirect()->route('questions.show', $question->id)->with('message', 'Created successfully.');
    }

    public function edit(Question $question)
    {
        $this->authorize('update', $question);
        return view('questions.create_and_edit', compact('question'));
    }

    public function update(QuestionRequest $request, Question $question)
    {
        $this->authorize('update', $question);
        $question->update($request->all());

        return redirect()->route('questions.show', $question->id)->with('message', 'Updated successfully.');
    }

    public function destroy(Question $question)
    {
        $this->authorize('destroy', $question);
        $question->delete();

        return redirect()->route('questions.index')->with('message', 'Deleted successfully.');
    }
}
