<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use App\Models\Admin;
use Illuminate\Contracts\View\View as ViewView;
use Illuminate\Http\Request;

class AdminVuController extends Controller
{

    public function edit($id): View
    {
        $admin = Admin::findOrFail($id);
        // ]);
        return view('admin.settings', compact('admin'));
    }


    public function update(Request $request, string $id)
    {


        // Psychologue::whereId($id)->update($validatedData);

        Admin::whereId($id)->update($request->except('_token'));

        return to_route('admin.dashboard')->with(['success' => 'Administrateur modifié.e avec succès']);
    }

    



    
}
