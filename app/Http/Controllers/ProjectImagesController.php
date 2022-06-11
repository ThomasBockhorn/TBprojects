<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Image;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectImagesController extends Controller
{
    
    /**
     * Instantiate a new controller instance
     * 
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);

    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projectImages = Image::orderBy('id', 'asc')->paginate(10);

        return Inertia::render('ProjectImages/Index', ['projectImages' => $projectImages]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projects = Project::orderBy('id', 'asc')->paginate(100);

        return Inertia::render('ProjectImages/Create', ['projects' => $projects]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'project_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
      
       $imageName = time().'.'.$request->project_image->extension();  

        $request->project_image->move(public_path('images'), $imageName);

        return redirect()->route('dashboard');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        //
    }
}
