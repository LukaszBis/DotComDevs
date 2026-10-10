<?php

namespace App\Http\Controllers;

use App\Models\ContactRequest;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {
        return view('kontakt', [
            'who'    => ContactRequest::WHO,
            'topics' => ContactRequest::TOPICS,
        ]);
    }

    public function store(Request $request)
    {
        // Pułapka na boty: ukryte pole, którego człowiek nie wypełni.
        if ($request->filled('website')) {
            return redirect()->route('kontakt')->with('success', true);
        }

        $data = $request->validate([
            'name'    => ['required', 'string', 'max:120'],
            'email'   => ['required', 'email', 'max:190'],
            'phone'   => ['nullable', 'string', 'max:40'],
            'who'     => ['required', 'in:' . implode(',', array_keys(ContactRequest::WHO))],
            'topic'   => ['required', 'in:' . implode(',', array_keys(ContactRequest::TOPICS))],
            'message' => ['required', 'string', 'min:10', 'max:3000'],
        ], [
            'name.required'    => 'Podaj swoje imię.',
            'email.required'   => 'Podaj adres e-mail, żebym mógł odpisać.',
            'email.email'      => 'To nie wygląda na poprawny adres e-mail.',
            'who.required'     => 'Zaznacz, kim jesteś.',
            'who.in'           => 'Wybierz jedną z opcji.',
            'topic.required'   => 'Wybierz, w czym mogę pomóc.',
            'topic.in'         => 'Wybierz jedną z opcji.',
            'message.required' => 'Napisz kilka słów o tym, czego potrzebujesz.',
            'message.min'      => 'Wiadomość jest za krótka, napisz trochę więcej.',
        ]);

        ContactRequest::create($data);

        return redirect()->route('kontakt')->with('success', true);
    }
}
