<?php

namespace App\Http\Controllers;

use Auth;
use App\Materials;
use App\DataContainer;
use App\Http\Requests\AddMaterialRequest;
use App\Http\Requests\EditMaterialRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MaterialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materials = Materials::where('uploader', Auth::user()->id)->get();
        return view('materials.index', compact('materials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses        = DataContainer::getCourses();
        $instructors    = DataContainer::getInstructors();
        return view("materials.create", compact('courses', 'instructors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\AddMaterialRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddMaterialRequest $request)
    {
        // Store material file and return the path
        if($request->hasFile('file'))
            $path = $request->file('file')->store('files', 'dll');
        else
            $path = null;

        // Add Material to Database
        $material = new Materials();
        $material->name         = $request->name;
        $material->desc         = $request->desc;
        $material->course       = $request->course;
        $material->instructor   = $request->instructor;
        $material->url          = $request->url;
        $material->path         = $path;
        $material->uploader     = Auth::user()->id;
        $material->save();
        // back and show success message
        return redirect()->back()->with('status', 'Done :)');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $material       = Materials::where([['id', '=', intval($id)],['uploader', '=', Auth::user()->id]])->firstOrFail();
        $courses        = DataContainer::getCourses();
        $instructors    = DataContainer::getInstructors();
        return view('materials.edit', compact('material', 'courses', 'instructors'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\EditMaterialRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditMaterialRequest $request, $id)
    {
        // find the material
        $material = Materials::where([['id', '=', intval($id)],['uploader', '=', Auth::user()->id]])->firstOrFail();
        $material->name         = $request->name;
        $material->desc         = $request->desc;
        $material->course       = $request->course;
        $material->instructor   = $request->instructor;
        $material->uploader     = Auth::user()->id;

        if (isset($request->url)) {
            $material->url = $request->url;
            if($material->path != null)
                Storage::disk('dll')->delete($material->path);

            $material->path = null;
        }

        if (isset($request->file)) {
            //delete old material 
            if($material->path != null)
                Storage::disk('dll')->delete($material->path);
            // Store material file and return the path
            $path = $request->file('file')->store('files', 'dll');
            // set new path
            $material->path = $path;
            // set url null
            $material->url = null;
        }
        $material->save();
        // back and show success message
        return redirect()->back()->with('status', 'Done ! :)');
    }

    /**
     * Show delete form.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $material = Materials::where([['id', '=', intval($id)], ['uploader', '=', Auth::user()->id]])->firstOrFail();
        return view('materials.delete', compact('material'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $material = Materials::where([['id', '=', intval($id)], ['uploader', '=', Auth::user()->id]])->firstOrFail();
        // check file and delete it 
        if ($material->path != null) 
            Storage::disk('dll')->delete($material->path);

        $material->delete();
        return redirect('/materials');
    }
}
