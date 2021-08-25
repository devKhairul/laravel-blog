<?php

namespace App\Http\Controllers;

use Exception;
use App\Services\Newsletter;
use Illuminate\Validation\ValidationException;

class NewsletterController extends Controller
{
    public function __invoke(Newsletter $newsletter)
    {

        request()->validate([
            'email' => 'email|required'
        ]);

        try {
        $newsletter->subscribe(request('email'));

        } catch (Exception $e) {
            throw ValidationException::withMessages([
                'email' => 'Hmm. That email address looks a little fishy. Please try again'
            ]);
        }

        return redirect('/')->with('success', 'Oof Oof! You have been added to our newsletter');
    }
}
