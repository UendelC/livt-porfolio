<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Response;

class ProjectController extends Controller
{
    public function index(): Response
    {
        return inertia('Projects/Index');
    }

    public function create(): Response
    {
        $skills = Skill::all();

        return inertia('Projects/Create', compact('skills'));
    }

    public function store(
        StoreProjectRequest $request,
        Project $projects
    ): RedirectResponse {
        $projects->create($request->transformed());

        return redirect(route('projects.index'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
