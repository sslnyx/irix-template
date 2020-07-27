<?php

namespace App\Http\Controllers;

use App\Exports\RegistrantsExport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Registrant;

// use App\Mail\NewRegistrant;
// use Illuminate\Support\Facades\Mail;

class RegistrantController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $data = var_dump(json_decode($request['data']));

        $request->validate([

            'firstName' => 'required|string',
            'lastName' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required',
            // 'city' => 'required',
            // 'postalCode' => 'required',
            // 'options' => 'required',
            // 'check' => 'accepted',
        ]);

        // recaptcha validate
        $secret = env("RECAPTCHA_SECRET_KEY");

        $response = (new \ReCaptcha\ReCaptcha($secret))
            ->setExpectedAction('contact_form')
            ->verify($request["token"]);

        // return response()->json($request);

        if (!$response->isSuccess()) {
            abort();
        }

        if ($response->getScore() < 0.5) {
            return response()->json("error!");
        }


        Registrant::create($request->all());

        return response()->json("score:" . $response->getScore());

        // Mail::to(explode(',', env('MAIL_RECIPIENT')))->send(new NewRegistrant($request));
        // return response()->json($request);
        // return redirect()->route('thankyou');
    }

    public function export()
    {
        return Excel::download(new RegistrantsExport, 'registrants.xlsx');
    }

}
