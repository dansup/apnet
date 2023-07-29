<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Instance;

class SiteController extends Controller
{
    public function index(Request $request)
    {
        $this->validate($request, [
            'software' => 'sometimes|max:14',
            'q' => 'sometimes|min:2'
        ]);

        $query = $request->input('q');
        $software = $request->software;
        $instances = Instance::when($query, function($q, $query) {
                return $q->where('domain', 'like', $query . '%');
            })
            ->when($software, function($q, $software) {
                return $q->where('software', $software);
            })
            ->orderByDesc('user_count')
            ->paginate(10)
            ->withQueryString();
        return view('welcome', compact('instances'));
    }
}
