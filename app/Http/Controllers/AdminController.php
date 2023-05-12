<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Models\Category ;
use Alert;
use App\Models\Setting;
use App\Models\Brand;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class AdminController extends Controller

{

    public function site_setting(){
        $id = 1 ;
        $data = setting::find($id);


        return view('admin.site_setting',compact('data'));



    }


#slider-------------------------------------------------------------------------------

public function Slider(){

    $sliders = Slider::all( );

        return view('admin.slider',compact('sliders'));
    }

public function delete_Slider($id)  {
        $slide = slider::find($id);
        if ($slide->image){
            $path = '/catagoryimage/'.$slide->image;
            if(File::exists($path))
            {

                File::delete($path);

            }

            $slide->delete();
            Alert::success('Congrats','slider deleted Successfully');

            return redirect()->back();

        }}

public function Slideruploud(Request $request){

        $data=new Slider;
        $image=$request->file;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('catagoryimage',$imagename);
        $data->description=$request->description;
        $data->image=$imagename;
        $data->status=$request->status == true ? '1':'0';
        $data->title=$request->title;
        $data->save();

        Alert::success('Congrats','Slider was  Added Successfully');

        return redirect()->back();
    }

public function edit_slider($id){
    $categories = Category::all();
    $data = Slider::find($id);
    return view('admin.editslider', compact('data','categories'));




}


public function Update_slider(Request $request , $id){



        $data = Slider::find($id);
        $data->status=$request->status == true ? '1':'0';
        $data->title=$request->title;
        $image=$request->file;
        if($image){
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('catagoryimage',$imagename);
        $data->image=$imagename;
        }
        $data->description=$request->description;

        $data->update();

        Alert::success('Congrats','slider Updated  Successfully');


    return redirect()->back();


}




#brand-----------------------------------------------------------------------------------------------------



public function deletebrand($id){
               $brand = Brand::find($id);



            $brand->delete();
            Alert::success('Congrats','Brand deleted Successfully');

            return redirect()->back();
    }
public function adminbrand(){
        $brands = Brand::all();
        return view('admin.adminbrand',compact('brands'));


    }


public function createbrand(Request $request){

        $data=new Brand;

        $data->name=$request->title;
        $slug = Str::slug($request->title, '-');
        $data->slug = $slug;
        $image=$request->file;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('catagoryimage',$imagename);
        $data->image=$imagename;
        $data->status=$request->status == true ? '1':'0';
        $data->save();

        Alert::success('Congrats','Brands Created Successfully');

        return redirect()->back();
}

public function edit_brand($id){
    $categories = Category::all();
    $data = Brand::find($id);
    return view('admin.edit_brand', compact('data','categories'));




}


public function Update_brand(Request $request , $id){



        $data = Brand::find($id);
        $data->status=$request->status == true ? '1':'0';
        $data->name=$request->title;
        $image=$request->file;
        if($image){
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('catagoryimage',$imagename);
        $data->image=$imagename;
        }

        $data->update();

        Alert::success('Congrats','brand Updated  Successfully');


    return redirect()->back();


}





#categories---------------------------------------------------------------------------------------------------------



    public function AdminCategories(){


            $categories = Category::all();

        return view('admin.creatcat',compact('categories'));

    }


    public function createcatagory(Request $request){
        // return $request;
        $data=new Category;
        $image=$request->file('file');
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('catagoryimage',$imagename);
        $data->image=$imagename;
        $data->name=$request->title;
        $slug = Str::slug($request->title, '-');
        $data->slug = $slug;
        $data->save();

        Alert::success('Congrats','Category Added Successfully');

        return redirect()->back();



    }



    public function deletcatagory($id)  {
        $category = Category::find($id);
        if ($category->image){
            $path = '/catagoryimage/'.$category->image;
            if(File::exists($path))
            {

                File::delete($path);

            }


            $category->delete();
            Alert::success('Congrats','Category deleted Successfully');

            return redirect()->back();



        }


      }

public function editcatagory($id){
    $categories = Category::all();
    $data = Category::find($id);
    return view('admin.editcat', compact('data','categories'));




}


public function updatecatagory(Request $request , $id){



        $data = Category::find($id);
        $data->name=$request->title;
        $image=$request->file;
        if($image){
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('catagoryimage',$imagename);
        $data->image=$imagename;
        }

        $data->update();

        Alert::success('Congrats','category Updated  Successfully');


    return redirect()->back();


}


#products----------------------------------------------------------------------------------------------

public function all_products(){
        $products = Product::all();
        return view('admin.all_products',compact('products'));


    }

public function Upload_Product(Request $request){

        $data=new Product;
        $data->status=$request->status == true ? '1':'0';
        $data->trending=$request->trending == true ? '1':'0';
        $data->name=$request->title;
        $image=$request->file;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('catagoryimage',$imagename);
        $data->image=$imagename;
        $slug = Str::slug($request->title, '-');
        $data->slug = $slug;
        $data->long_description=$request->Longdescription;
        $data->description=$request->description;
        $data->price=$request->Price;
        $data->category_id=$request->category_id;
        $data->brand_id=$request->brand_id;
        $data->discount_price=$request->discount;
        $data->quantity=$request->quantity;

        $data->save();
        if($request->hasFile('image')){
            $uploadPath='catagoryimage';

            foreach($request->file('image') as $imagefile){
                $extension = $imagefile->getExtension();
                $filename = time().'.'.$extension;
                $imagefile->move($uploadPath,$filename);
                $finalimage = $uploadPath.'/'.$filename;

                $data->productimage()->create([
                    'product_id'=>$data->id,
                    'image'=>$finalimage,


                 ]);



            }




        }



        Alert::success('Congrats','Product Added Successfully');

        return redirect()->back();
    }

public function deletepro($id)  {
        $PRo = Product::find($id);
        if ($PRo->image){
            $path = '/catagoryimage/products/'.$PRo->image;
            if(File::exists($path))
            {

                File::delete($path);

            }


            $PRo->delete();
            Alert::success('Congrats','the Product was deleted Successfully');

            return redirect()->back();



        }
    }

public function edit_product(int $id) {
    $categories = Category::all();
    $brands = Brand::all();
    $data = Product::find($id);
    return view('admin.editproduct', compact('data','categories','brands'));

}

    public function adminproduct(){
        $categories = Category::all();
        $brands = Brand::all();
        return view('admin.product',compact('categories','brands'));


    }


public function Update_Product(Request $request , $id){



        $data = Product::find($id);
        $data->status=$request->status == true ? '1':'0';
        $data->trending=$request->trending == true ? '1':'0';
        $data->name=$request->title;
        $image=$request->file;
        if($image){
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('catagoryimage',$imagename);
        $data->image=$imagename;
        }
        $data->long_description=$request->long_description;
        $data->description=$request->description;
        $data->price=$request->Price;
        $data->category_id=$request->category_id;

        $data->brand_id=$request->brand_id;
        $data->discount_price=$request->discount;
        $data->quantity=$request->quantity;

        $data->update();
        if($request->hasFile('image')){
            $uploadPath='catagoryimage';

            foreach($request->file('image') as $imagefile){
                $extension = $imagefile->getExtension();
                $filename = time().'.'.$extension;
                $imagefile->move($uploadPath,$filename);
                $finalimage = $uploadPath.'/'.$filename;

                $data->productimage()->create([
                    'product_id'=>$data->id,
                    'image'=>$finalimage,


                 ]);



            }




        }


        Alert::success('Congrats','Product Updated  Successfully');


  return redirect()->back();


}












public function Update_setting(Request $request){

        $id = 1 ;
        $data = Setting::find($id);
        $data->name=$request->title;
        $image=$request->file1;
        if($image){
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file1->move('catagoryimage',$imagename);
        $data->logo=$imagename;
        }

        $image=$request->file2;
        if($image){
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file2->move('catagoryimage',$imagename);
        $data->favicon=$imagename;
        }
        $data->Email=$request->Email;
        $data->phone=$request->phone;
        $data->facebook=$request->facebook;
        $data->twitter=$request->twitter;
        $data->instagram=$request->twitter;
        $data->youtube=$request->youtube;
        $data->tiktok=$request->tiktok;
        $data->description=$request->description;


        $data->update();



        Alert::success('Congrats','Settings Updated  Successfully');


  return redirect()->back();


}
}