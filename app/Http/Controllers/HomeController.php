<?php



namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use App\Models\cart;
use App\Models\Category;
use App\Models\Setting;
use App\Models\Slider;
use App\Models\orders;

use App\Models\Wishlist;
use Illuminate\Http\Request;
use AppWishlist;
use Alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use App\Models\User;

class HomeController extends Controller
{
    public function Home()
    {
if(Auth::check())
{
          $usertype = Auth::user()->usertype;



            if($usertype=='admin')
            {
            $slide = Slider::count();
            $brand = Brand::count();
            $Products = Product::count();
            $categories = Category::count();
        return view('admin.adminpanel',compact('settings','categories','Products','slide','brand','count'));
            }

            else
            { $user = auth()->user();
            $id = 1 ;
            $settings = Setting::find($id);
            $categories = Category::paginate(5);
            $slide = Slider::where('status','0')->get();
            $count = cart::where('phone',$user->phone)->count();

            $prod = Product::paginate(5);

                return view('user.home',compact('settings','categories','prod','slide','count'));

            }
}

return redirect('login')->withInput()->with('errmessage', 'Please Login to access restricted area.');



    }
    public function index()
        {$user = auth()->user();
            $id = 1 ;
            $settings = Setting::find($id);
                $categories = Category::paginate(5);
                $slide = Slider::where('status','0')->get();
                $count = cart::where('phone',$user->phone)->count();
                $prod = Product::paginate(5);

                return view('user.home',compact('settings','categories','prod','slide','count'));}


    public function contactus()
   {
     $id = 1 ;
            $settings = Setting::find($id);
$user = auth()->user();
                $categories = Category::paginate(5);
                $slide = Slider::where('status','0')->get();
                $count = cart::where('phone',$user->phone)->count();
                $prod = Product::paginate(5);

                return view('user.contactus',compact('settings','categories','prod','slide','count'));}



    public function aboutus()

   {
                $id = 1 ;
            $settings = Setting::find($id);
$user = auth()->user();
                $categories = Category::paginate(5);
                $slide = Slider::where('status','0')->get();
                $count = cart::where('phone',$user->phone)->count();
                $prod = Product::paginate(5);

                return view('user.aboutus',compact('settings','categories','prod','slide','count'));}



    public function Categories(){
                    $id = 1 ;
            $settings = Setting::find($id);
 $user = auth()->user();
$count = cart::where('phone',$user->phone)->count();
$categories = Category::paginate(5);
        return view('user.all_catagory',compact('settings','categories','count'));
    }




    public function view_product(string $slug){
                    $id = 1 ;
            $settings = Setting::find($id);
         $user = auth()->user();
$count = cart::where('phone',$user->phone)->count();
$product = Product::where('slug',$slug)->first();
$categories = Category::paginate(5);
        return view('user.proview',compact('settings','categories','product','count'   ));
    }


        public function Products(string $slug){
                        $id = 1 ;
            $settings = Setting::find($id);
             $user = auth()->user();
$count = cart::where('phone',$user->phone)->count();
            $category = Category::where('slug',$slug)->first();
            $categories = Category::paginate(5);
            if($category){
                $products = $category->products()->get();

            return view('user.Products',compact('settings','category','products','categories','count'));
    }

        else {
            return redirect()->back();


        }

}

        public function AllProducts(){
                        $id = 1 ;
            $settings = Setting::find($id);
            $user = auth()->user();
            $count = cart::where('phone',$user->phone)->count();
            $products = Product::all();
            $categories = Category::paginate(5);

            return view('user.AllProducts',compact('settings','products','categories','count'));
    }






        public function brands(string $slug){
                        $id = 1 ;
            $settings = Setting::find($id);
             $user = auth()->user();
$count = cart::where('phone',$user->phone)->count();
            $brands = Brand::where('slug',$slug)->get();
            $categories = Category::paginate(5);
            if($brands){
                $products = $brands->products()->get();

            return view('user.brands',compact('settings','brands','products','categories','count'));
    }

        else {
            return redirect()->back();


        }

}



#search

public  function search(Request $request){
                $id = 1 ;
            $settings = Setting::find($id);
     $user = auth()->user();
$count = cart::where('phone',$user->phone)->count();
    $search=$request->search;
    if($search==''){
    return redirect('/');

    }
    $data= Product::where('name','Like','%'.$search.'%')->get();
    $data2= Category::where('name','Like','%'.$search.'%')->get();
    $data3= Brand::where('name','Like','%'.$search.'%')->get();
    $categories = Category::paginate(5);
    return view('user.search',compact('settings','categories','data', 'data2','data3','count'));


}









#wishlist
public function store(Request $request)
    {
$this->validate($request, array(
 'user_id'=>'required',
 'product_id' =>'required',
));
 $user = auth()->user();

$count = cart::where('phone',$user->phone)->count();
$status=Wishlist::where('user_id',Auth::user()->id)
->where('product_id',$request->product_id)
->first();

if(isset($status->user_id) and isset($request->product_id))
   {
    Alert::error('Sorry!!','This item already exists');
       return redirect()->back();
   }
   else
   {
       $wishlist = new Wishlist;

       $wishlist->user_id = $request->user_id;
       $wishlist->product_id = $request->product_id;
       $wishlist->save();
    Alert::success('Congrats','Item Added Successfully in your wishlist');
       return redirect()->back();
   }

}





public function __construct() {
        $this->middleware(['auth']);
    }



public function destroy($id)
    {
      $wishlist = Wishlist::findOrFail($id);
      $wishlist->delete();
        Alert::success('Congrats','your wishlist has been deleted');
       return redirect()->back();

    }


public function wishlistpage(){
                $id = 1 ;
            $settings = Setting::find($id);

        $user = Auth::user();
        $wishlists = Wishlist::where("user_id", "=", $user->id)->orderby('id', 'desc')->paginate(10);
        $categories = Category::paginate(5);
        $count = cart::where('phone',$user->phone)->count();

        return view('user.wishlist',compact('settings','categories','wishlists','count'));

}




public function addcart(Request $request,$id){

    if(Auth::id()){
    $user = Auth::user();
    $product=Product::find($id);
    $cart=new cart;
    $cart->name = $user->firstname;
    $cart->phone = $user->phone;
    $cart->address = $user->address;
    $cart->price = $product->price;
    $cart->quantity = $request->quantity;
    $cart->product_title = $product->name;
    $cart->save();

    Alert::success('Congrats','item was added successfully');
       return redirect()->back();
    }
    else{

        return redirect('login');
    }


    }



public function makeorder(Request $request){


    if(Auth::id()){
    $user = Auth::user();
    $name=$user->firstname;
    $phone =$user->phone;
    $address =$user->address;
    foreach($request->product_title as $key=>$productname ){
        $order = new orders;
        $order->product_title=$request->product_title[$key];
        $order->price=$request->price[$key];
        $order->quantity=$request->quantity[$key];
        $order->name=$name;
        $order->phone=$phone;
        $order->address=$address;
        $order->status='not delivered';
        $order->save();



    DB::table('carts')->where('phone',$phone)->delete();
    DB::table('product')->where('name',$order->product_title)->decrement('quantity', $order->quantity);

    Alert::success('Congrats','order has been created');
       return redirect()->back();}
    }
    else{

        return redirect('login');
    }


    }


public function showcart(){





    // Clear the cart
    session()->forget('cart');
                $id = 1 ;
            $settings = Setting::find($id);
        $user = auth()->user();
        $cart = cart::where('phone',$user->phone)->get();
        $count = cart::where('phone',$user->phone)->count();
        $categories = Category::paginate(5);
    // Calculate the total cost of the items in the cart
            $total = 0;
            foreach ($cart as $item) {
                $total += $item['price'] * $item['quantity'];
    }
        return view('user.cart',compact('settings','count','cart','categories','total'));






}


public function destroyitemcart($id)
    {
      $delcart = cart::findOrFail($id);
      $delcart->delete();
        Alert::success('Congrats','your item has been removed ');
       return redirect()->back();

    }








public function checkout(Request $request)
{
    // Get the cart data from the session
    $cart = session('cart', []);

    // Calculate the total cost of the items in the cart
    $total = 0;
    foreach ($cart as $item) {
        $total += $item['price'] * $item['quantity'];
    }

    // Clear the cart
    session()->forget('cart');

    // Redirect to a thank you page
    return redirect()->with('total', $total);
}












}