<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Slide;

class LaptopController extends Controller{
    public function index(){
        return view('backend.pages.laptop.index');
    }
    public function create(){
        return view('backend.pages.laptop.create');
    }
    public function store(Request $request){
        return redirect('backend.pages.laptop.index');
    }
    public function show($id){
        return view('backend.pages.laptop.show');
    }
    public function edit($id){
        return view('backend.pages.laptop.edit');
    }
    public function update(Request $request,$id){
        return redirect('backend.pages.laptop.index');
    }
    public function destroy($id){
        return view('backend.pages.laptop.edit');
    }
};
