<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate(
            [
                'name' => 'required',
                'phone' => ['required', 'unique:feedback,phone', 'regex:/^((\+7|7|8)+([0-9]){10})$/'],
                'agree' => 'required'
            ],
            [
                'name.required' => 'Это обязательное поле',
                'phone.required' => 'Это обязательное поле',
                'phone.unique' => 'Этот номер уже в процессе обработки',
                'phone.reqex' => 'Некорректный номер',
                'agree.required' => 'Это обязательное поле',
            ]
        );

        $feedback = Feedback::create([
                'name' => $validated['name'],
                'phone' => $validated['phone'],
            ]
        );

        return redirect()->back()->with('success', 'success');

    }

    /**
     * Display the specified resource.
     */
    public function show(Feedback $feedback)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Feedback $feedback)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Feedback $feedback)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Feedback $feedback)
    {
        //
    }
}
