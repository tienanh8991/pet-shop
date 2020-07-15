<?php

namespace App\Http\Controllers;


use App\Cart;
use App\Comment;
use App\Discount;
use App\Http\Service\ProductService;
use App\Http\Service\ShopService;
use App\Product;
use App\User;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ShopController extends Controller
{
    protected $shopService;

    public function __construct(ShopService $shopService)
    {
        $this->shopService = $shopService;
    }

    function index()
    {
//        \session()->flush();
        $cart = Session::get('cart');
        $products = $this->shopService->index();
        return view('shop.shop', compact('cart','products'));
    }

    function showCart()
    {
        $cart = Session::get('cart');
        return view('shop.cart.index', compact('cart'));
    }

    public function addToCart($productId)
    {
        $this->shopService->addToCart($productId);
        Toastr::success('Thêm vào giỏ hàng thành công !', 'Success', ["positionClass" => "toast-top-center"]);
        return redirect()->back();
    }

    public function removeProductIntoCart($productId)
    {
        $this->shopService->removeProductIntoCart($productId);
        return redirect()->back();
    }

    function showCheckout()
    {
        $cart = session('cart');
        return view('shop.cart.checkout', compact('cart'));
    }

    function checkout(Request $request)
    {
        $this->shopService->saveWaitOrder($request);
        \session()->forget('cart');
        Toastr::success('Đặt hàng thành công !', 'Success', ["positionClass" => "toast-top-center"]);
        return redirect()->route('shop.index');
    }

    function showShopDetail($id)
    {
        $cart = Session::get('cart');
        $products = DB::table('products')->inRandomOrder()->paginate(4);
        $productDetails = Product::where('id', $id)->get();
        $comments = Comment::where('productDetail_id', $id)->get();
        return view('shop.product_ detail', compact('productDetails', 'comments', 'products','cart'));
    }

    public function postComment(Request $request, $id)
    {
        if (Auth::check()) {
            $comment = new Comment();
            $comment->username = $request->name;
            $comment->content = $request->inputContent;
            $comment->productDetail_id = $id;
            $comment->user_id = Auth::id();
            $comment->save();
            return back();
        } else {
            return redirect()->route('login-shop.form');
        }
    }

    function getDiscount(Discount $discount)
    {
        $discounts = $discount->all();
        return response()->json($discounts, 200);
    }
}
