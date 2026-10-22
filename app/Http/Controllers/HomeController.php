<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;

class HomeController extends Controller
{
    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if($usertype=='1')
        {
            return view('admin.home');
        }

        else
        {
            $data = product::all();

            $user=auth()->user();
            
            $count=cart::where('phone',$user->phone)->count();
           

            return view('user.home', compact('data','count'));
        }
    }



    public function index()
    {
        if(Auth::id())
        {
            return redirect('redirect');
        }

        else
        {
            $data = product::all();

            return view('user.home', compact('data'));
        }

    }


    public function search(Request $request)
    {
        $search = $request->search;
    
        $data = product::where('title', 'like', '%' . $search . '%')->get();
    
        $user = auth()->user();
        $count = cart::where('phone', $user->phone)->count();
    
        return view('user.home', compact('data', 'count'));
    }

      
    public function addtocart(Request $request, $id)
    {
        if(Auth::id())
        {
            $user=auth()->user();

            $product=product::find($id);

            $cart=new cart;

            $cart->user_id=$user->id;
            $cart->name=$user->name;
            $cart->phone=$user->phone;
            $cart->address=$user->address;

            $cart->product_title=$product->title;  

            $cart->price=$product->price;

            $cart->quantity=$request->quantity;

            $cart->save();


            return redirect()->back()->with('message','Product Added Successfully');

        }

        else
        {
            return redirect('login');
        }
    }

    public function addCuratedBook(Request $request)
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        $validated = $request->validate([
            'title' => ['required', 'string', 'max:255'],
            'price' => ['required', 'numeric', 'min:0'],
            'quantity' => ['required', 'integer', 'min:1'],
        ]);

        $user = Auth::user();
        $cart = new Cart;
        $cart->user_id = $user->id;
        $cart->name = $user->name;
        $cart->phone = $user->phone;
        $cart->address = $user->address;
        $cart->product_title = $validated['title'];
        $cart->price = $validated['price'];
        $cart->quantity = $validated['quantity'];
        $cart->save();

        return redirect()->back()->with('message', 'Product Added Successfully');
    }


        public function showcart()
        {

           $user=auth()->user();

           $cart=cart::where(function ($query) use ($user) {
               $query->where('user_id', $user->id)
                   ->orWhere(function ($legacyQuery) use ($user) {
                       $legacyQuery->whereNull('user_id')
                           ->where('phone', $user->phone);
                   });
           })->get();
            
            $count=$cart->count();
           

            return view('user.showcart', compact('count', 'cart'));
        }

    

        public function deletecart($id)
        {
            $data=cart::find($id);

            $data->delete();

            return redirect()->back()->with('message','Product Removed Successfully');
        }

        
        public function confirmorder(Request $request)
        {
            $user = auth()->user();

            $name=$user->name;

            $phone=$user->phone;

            $address=$user->address;

            foreach($request->productname as $key=>$productname)
            {
                $order = new order;

                $order->product_name=$request->productname[$key];
                $order->price=$request->price[$key];
                $order->quantity=$request->quantity[$key];

                $order->name=$name;
                $order->phone=$phone;
                $order->address=$address;

                $order->status='Pending';

                $order->save();

            }

            DB::table('carts')->where('phone',$phone)->delete();
            return redirect()->back()->with('message','Order Placed Successfully');
        }

        public function about()
        {
            $user = auth()->user();
            $cart = $user
                ? Cart::where('user_id', $user->id)
                    ->orWhere(function ($query) use ($user) {
                        $query->whereNull('user_id')
                            ->where('phone', $user->phone);
                    })
                    ->get()
                : collect();

            $count = $cart->count();
           

            return view('user.about', compact('count', 'cart'));
            
        }
    
}
