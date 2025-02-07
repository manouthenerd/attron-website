<?php

namespace App\Http\Controllers;

use App\Http\Requests\sendEstimationFormRequest;
use App\Mail\SendEstimation;
use Illuminate\Support\Facades\Mail;

class EstimationFormController extends Controller
{
    public function __invoke(sendEstimationFormRequest $request)
    {
        $sender = $request->validated();

        Mail::to('info@attron-cab.com')->send(new SendEstimation($sender));

        return redirect('/#estimation-form');
    }
}
