<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Score;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreScoreRequest;
use App\Http\Resources\ScoreResource;
use Illuminate\Http\Response;

class ScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return ScoreResource::collection(Score::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreScoreRequest $request)
    {
        $data = $request->validated();
        
        $data['user_id'] = auth()->id();

        $score = Score::create($data);

        return ScoreResource::make($score);
    }

    /**
     * Display the specified resource.
     */
    public function show(Score $score)
    {
        return ScoreResource::make($score);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreScoreRequest $request, Score $score)
    {
        $score->update($request->validated());

        return response()->json(ScoreResource::make($score), Response::HTTP_ACCEPTED);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Score $score)
    {
        $score->delete();
        
        return response()->noContent();
    }
}
