<?php
    namespace App\Http\Controllers;
    use Illuminate\Http\Request;
    use App\Models\Desktop;

    class DesktopController extends Controller{
        public function index(){
            $desktops=Desktop::all();
        return view('backend.pages.desktop.index',compact('desktops'));
        }public function create(){
            return view('backend.pages.desktop.create');
        }
        public function store(Request $request) {
            $desktop = new Desktop;
            $desktop->d_name = $request->d_name;
            $desktop->d_cpu = $request->cpu;
            $desktop->d_ram = $request->ram;
            $desktop->d_ssd = $request->ssd;
            $desktop->d_gpu = $request->gpu;
            $desktop->d_brand = $request->brand;
            $desktop->d_price = $request->price;

            if ($request->hasFile('d_img')) {
                $imgFile = $request->file('d_img');
                $imgName = time() . '.' . $imgFile->getClientOriginalExtension();
                $imgFile->move(public_path('upload/imgs/products'), $imgName);
                $imgPath = 'upload/imgs/products/' . $imgName;

                $desktop->d_img = $imgPath;
            }

            $desktop->save();

            return redirect('/admin/products/desktop');
        }
        public function show($id){
            $desktop=Desktop::find($id);
            return view('backend.pages.desktop.show',compact('desktop'));
        }
        public function edit($id){
            $desktop=Desktop::find($id);
            return view('backend.pages.desktop.edit',compact('desktop'));
        }
        public function update(Request $request,$id){
            $desktop=Desktop::find($id);
            $desktop->d_name = $request->d_name;
            $desktop->d_cpu = $request->cpu;
            $desktop->d_ram = $request->ram;
            $desktop->d_ssd = $request->ssd;
            $desktop->d_gpu = $request->gpu;
            $desktop->d_brand = $request->brand;
            $desktop->d_price = $request->price;

            if ($request->hasFile('d_img')) {
                $imgFile = $request->file('d_img');
                $imgName = time() . '.' . $imgFile->getClientOriginalExtension();
                $imgFile->move(public_path('upload/imgs/products'), $imgName);
                $imgPath = 'upload/imgs/products/' . $imgName;

                $desktop->d_img = $imgPath;
            }

            $desktop->save();
            return redirect()->route('product.desktop.index');

        }
        public function destroy($id){
            $desktop = Desktop::find($id);
            if ($desktop) {
                $desktop->delete();
            }
            return redirect()->route('product.desktop.index');
        }
        public function lastfour()
{
    // Assuming you are fetching the last four desktops from a database
    $lastFourDesktops = Desktop::orderBy('created_at', 'desc')->take(4)->get();
    return $lastFourDesktops;
}
public function alldesktops(){
    $desktops=Desktop::all();
    return view('frontend.pages.desktop',compact('desktops'));
}
public function showdetail($id){
    $desktop = Desktop::find($id);
    if ($desktop) {
        return view('frontend.pages.showdesktop', ['showdetail' => $desktop, 'desktop' => $desktop]);
    }
    return redirect('/desktop')->with('error', 'Desktop not found');
}
    };

