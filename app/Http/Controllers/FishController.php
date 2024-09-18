<?php

namespace App\Http\Controllers;

use App\Models\Fish;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class FishController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = 'Fishes - Info';
        $viewData['subtitle'] = 'List of Fishes';
        $viewData['fishes'] = Fish::all();

        return view('fish.index')->with('viewData', $viewData);
    }

    public function show(string $id): View
    {
        $viewData = [];
        $fish = Fish::findOrFail($id);
        $viewData['title'] = $fish->getName().' Fishes - Info';
        $viewData['subtitle'] = $fish->getName().' - Fish information';
        $viewData['fish'] = $fish;

        return view('fish.show')->with('viewData', $viewData);
    }

    public function register(): View
    {
        $viewData = [];
        $viewData['title'] = 'Register Fishes';

        return view('fish.register')->with('viewData', $viewData);
    }

    public function save(Request $request): RedirectResponse
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'weight' => 'required|numeric',
            'species' => 'string',
        ]);

        Fish::create($request->only(['name', 'weight', 'species']));

        return redirect()->route('fish.register')->with('status', 'Item created successfully!');
    }

    public function statistic(): View
    {
        $speciesCount = Fish::select('species')
            ->selectRaw('count(*) as count')
            ->groupBy('species')
            ->get();

        $maxWeight = Fish::max('weight');

        return view('fish.statistic')->with(['speciesCount' => $speciesCount, 'maxWeight' => $maxWeight]);
    }
}
