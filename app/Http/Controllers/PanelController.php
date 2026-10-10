<?php

namespace App\Http\Controllers;

use App\Models\ContactRequest;
use Illuminate\Http\Request;

class PanelController extends Controller
{
    public function index(Request $request)
    {
        $status = $request->query('status');
        $validStatus = $status && isset(ContactRequest::STATUSES[$status]);

        $requests = ContactRequest::query()
            ->when($validStatus, fn ($q) => $q->where('status', $status))
            ->latest()
            ->paginate(20)
            ->withQueryString();

        $counts = ContactRequest::query()
            ->selectRaw('status, count(*) as total')
            ->groupBy('status')
            ->pluck('total', 'status');

        return view('panel.index', [
            'requests' => $requests,
            'counts'   => $counts,
            'status'   => $validStatus ? $status : null,
            'statuses' => ContactRequest::STATUSES,
        ]);
    }

    public function update(Request $request, ContactRequest $contactRequest)
    {
        $data = $request->validate([
            'status' => ['required', 'in:' . implode(',', array_keys(ContactRequest::STATUSES))],
        ]);

        $contactRequest->update($data);

        return back()->with('status', 'Zaktualizowano zgłoszenie.');
    }

    public function destroy(ContactRequest $contactRequest)
    {
        $contactRequest->delete();

        return back()->with('status', 'Usunięto zgłoszenie.');
    }
}
