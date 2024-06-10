<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Laptop;

class LaptopController extends Controller{
    public function index(){
        $laptops=Laptop::all();
        return view('backend.pages.laptop.index',compact('laptops'));
    }
    public function create(){
        return view('backend.pages.laptop.create');
    }
    public function store(Request $request) {
        $laptop = new Laptop;
        $laptop->l_shortname = $request->l_sname;
        $laptop->l_longname = $request->l_lname;
        $laptop->l_cpu = $request->cpu;
        $laptop->l_ram = $request->ram;
        $laptop->l_ssd = $request->ssd;
        $laptop->l_gpu = $request->gpu;
        $laptop->l_screen = $request->screen;
        $laptop->l_battery = $request->battery;
        $laptop->l_warranty = $request->warranty;
        $laptop->l_brand = $request->brand;
        $laptop->l_oprice = $request->oprice;
        $laptop->l_nprice = $request->nprice;
        $laptop->l_desc = $request->desc;

        if ($request->hasFile('l_img')) {
            $imgFile = $request->file('l_img');
            $imgName = time() . '.' . $imgFile->getClientOriginalExtension();
            $imgFile->move(public_path('upload/imgs/products'), $imgName);
            $imgPath = 'upload/imgs/products/' . $imgName;

            $laptop->l_img = $imgPath;
        }

        $laptop->save();

        return redirect('/admin/products/laptop');
    }
    public function show($id){
        $laptop=Laptop::find($id);
        return view('backend.pages.laptop.show',compact('laptop'));
    }
    public function edit($id){
        $laptop=Laptop::find($id);
        return view('backend.pages.laptop.edit',compact('laptop'));
    }
    public function update(Request $request,$id){
        $laptop=Laptop::find($id);
        $laptop->l_shortname = $request->l_sname;
        $laptop->l_longname = $request->l_lname;
        $laptop->l_cpu = $request->cpu;
        $laptop->l_ram = $request->ram;
        $laptop->l_ssd = $request->ssd;
        $laptop->l_gpu = $request->gpu;
        $laptop->l_screen = $request->screen;
        $laptop->l_battery = $request->battery;
        $laptop->l_warranty = $request->warranty;
        $laptop->l_brand = $request->brand;
        $laptop->l_oprice = $request->oprice;
        $laptop->l_nprice = $request->nprice;
        $laptop->l_desc = $request->desc;

        if ($request->hasFile('l_img')) {
            $imgFile = $request->file('l_img');
            $imgName = time() . '.' . $imgFile->getClientOriginalExtension();
            $imgFile->move(public_path('upload/imgs/products'), $imgName);
            $imgPath = 'upload/imgs/products/' . $imgName;

            $laptop->l_img = $imgPath;
        }

        $laptop->save();
        return redirect()->route('product.laptop.index');

    }
    public function destroy($id){
        $laptop = Laptop::find($id);
        if ($laptop) {
            $laptop->delete();
        }
        return redirect()->route('product.laptop.index');
    }
    public function latest()
{
    // Assuming you are fetching the latest laptops from a database
    $latestLaptops = Laptop::latest()->take(4)->get();
    return $latestLaptops;
}
public function alllaptops(){
    $laptops=Laptop::all();
    return view('frontend.pages.laptops',compact('laptops'));
}
public function showdetail($id){
    $laptop = Laptop::find($id);
    if ($laptop) {
        return view('frontend.pages.showlaptop', ['showdetail' => $laptop, 'laptop' => $laptop]);
    }
    return redirect('/laptops')->with('error', 'laptop not found');
}
};
