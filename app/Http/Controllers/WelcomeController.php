<?php

namespace App\Http\Controllers;
use App\DataContainer;
use App\Materials;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
	public function index(){
		$courses = DataContainer::getCourses();
		return view('welcome', compact('courses'));
	}

	public function search(Request $request){
		$materials = Materials::where('name', 'like', "%{$request->q}%")->get();
		return view('welcome.search', compact('materials'));
	}

	public function course($id){
		$materials = Materials::where('course', intval($id))->get();
		return view('welcome.course', compact('materials'));
	}
	public function material($id){
		$material = Materials::findOrFail($id);
		return view('welcome.material', compact('material'));
	}

	public function sreg(){
		return view('auth.success_registration');
	}
}
