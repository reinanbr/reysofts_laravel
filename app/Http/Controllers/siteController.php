<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InfoSites;

class SiteController extends Controller
{
    public function index()
    {
        $data = InfoSites::get();

        return view('site.index', ['data' => $data]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:255|string',
            'link' => 'required',
        ], [
            'title.required' => 'O campo título é obrigatório',
            'link.required' => 'O campo link é obrigatório',
            'title.max' => 'O campo título deve ter no máximo 255 caracteres',
        ]);

        InfoSites::create($data);
    }

    public function update(InfoSites $infoSites, Request $request)
    {
        $data = $request->validate([
            'title' => 'required|max:255|string',
            'link' => 'required',
        ], [
            'title.required' => 'O campo título é obrigatório',
            'link.required' => 'O campo link é obrigatório',
            'title.max' => 'O campo título deve ter no máximo 255 caracteres',
        ]);

        $infoSites->update($data);
    }

    public function destroy(InfoSites $infoSites)
    {
        $infoSites->delete();
    }
}

//