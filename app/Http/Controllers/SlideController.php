<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Slide;

class SlideController extends Controller{
    public function index(){
        $slides=Slide::all();
        return view('backend.pages.slide.index',compact('slides'));
    }
    public function create(){
        return view('backend.pages.slide.create');
    }
    public function store(Request $request) {
        $slide = new Slide;

        $slide->s_title = $request->title;
        if ($request->hasFile('s_img')) {
            $imgFile = $request->file('s_img');
            $imgName = time() . '.' . $imgFile->getClientOriginalExtension();
            $imgFile->move(public_path('upload/imgs/slides'), $imgName);
            $imgPath = 'upload/imgs/slides/' . $imgName;

            $slide->s_img = $imgPath;
        }

        $slide->save();

        return redirect('/admin/slide');
    }
    public function show($id){
        $slide=Slide::find($id);
        return view('backend.pages.slide.show',compact('slide'));
    }
    public function edit($id){
        $slide=Slide::find($id);
        return view('backend.pages.slide.edit',compact('slide'));
    }
    public function update(Request $request,$id){
        $slide=Slide::find($id);
        $slide->s_title = $request->title;

        if ($request->hasFile('s_img')) {
            $imgFile = $request->file('s_img');
            $imgName = time() . '.' . $imgFile->getClientOriginalExtension();
            $imgFile->move(public_path('upload/imgs/slides'), $imgName);
            $imgPath = 'upload/imgs/slides/' . $imgName;

            $slide->s_img = $imgPath;
        }

        $slide->save();
        return redirect()->route('admin.slide.index');

    }
    public function destroy($id){
        $slide = Slide::find($id);
        if ($slide) {
            $slide->delete();
        }
        return redirect()->route('admin.slide.index');
    }

public function allslides(){
    return Slide::all();

}
};
