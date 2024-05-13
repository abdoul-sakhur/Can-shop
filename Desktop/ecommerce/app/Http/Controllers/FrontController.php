<?php

namespace App\Http\Controllers;

// use Darryldecode\Cart\Cart;
// use Darryldecode\Cart\CartServiceProvider;

use App\Http\Requests\CommentRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\PaymentRequest;
use App\Http\Requests\userRequest;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Payment;
use App\Models\Product;
use App\Models\Slider;
use App\Models\User;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class FrontController extends Controller
{
    public function home()
    {
        $query = Product::query();
        $randomProducts = Product::inRandomOrder()->take(8)->get();
        $slider = Slider::inRandomOrder()->take(5)->get();
        $cardNumber = Cart::count();
        $users = User::all();

        // dd($cardNumber);
        return view('front.home', ['products' => $query->paginate(3),
        'randomProducts' => $randomProducts,
        'sliders' => $slider,
        'cardNumber' => $cardNumber,
        'users' => $users,
     ]);
    }

    public function products()
    {
        $query = Product::query();
        $category = Category::all();
        $cardNumber = Cart::count();

        return view('front.products', [
            'products' => $query->paginate(8),
            'categories' => $category,
            'categories2' => Category::all(),
            'cardNumber' => $cardNumber,
        ]);
    }

    public function show_by_category($id)
    {
        $category = Category::find($id);
        // dd($category);
        $product = $category->products()->paginate(8);
        $cardNumber = Cart::count();

        // dd($product);
        return view('front.products', [
        'products' => $product,
        'categories' => $category,
        'categories2' => Category::all(),
        'cardNumber' => $cardNumber,
        ]);
    }

    public function addCart($id)
    {
        $product = Product::find($id);

        Cart::add($product->id, $product->title, 1, $product->price, ['image' => $product->getImageUrl()]);
        $cardNumber = Cart::count();

        return to_route('front.cart', ['cardNumber' => $cardNumber]);
    }

    public function cart()
    {
        $panier = Cart::content();
        // dd($panier);
        $total = Cart::subtotal();
        $cardNumber = Cart::count();

        // dd($total);
        return view('front.panier.cart', [
            'panier' => $panier,
            'total' => $total,
            'cardNumber' => $cardNumber,
            ]);
    }

    public function updateCart($rowId)
    {
        $product = Cart::get($rowId);
        $quantity = $product->qty + 1;
        Cart::update($rowId, $quantity);

        return to_route('front.cart');
    }

    public function destroyCart($rowId)
    {
        Cart::remove($rowId);

        return to_route('front.cart');
    }

    public function show($id)
    {
        $product = Product::find($id);
        $cardNumber = Cart::count();

        return view('front.panier.product_details', [
            'product' => $product,
            'cardNumber' => $cardNumber,
    ]);
    }

    public function about()
    {
        return view('front.about');
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function user()
    {
        return view('front.loginRegisterForm');
    }

    public function register(userRequest $request)
    {
        User::create([
             'name' => $request->validated('name'),
             'email' => $request->validated('email'),
             'password' => Hash::make($request->validated('password')),
         ]);
        // dd($utilisateur);

        return to_route('home')->with('success', 'Votre compte a ete creer avec success');
    }

    public function login(LoginRequest $request)
    {
        $credentials = $request->validated();
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended(route('home'));
        }

        return back()->withErrors([
            'email' => 'vos identifiants sont incorrect',
        ])->onlyInput('email');
    }

    public function logout()
    {
        Auth::logout();

        return to_route('home');
    }

    public function commenter(CommentRequest $request)
    {
        $user = User::find(Auth::id());
        $comment = new Comment([
            'comments' => $request->input('comments'),
            'notes' => $request->input('notes'),
            'user_id' => $user->id,
        ]);

        $user->comments()->save($comment);
        $users = User::all();

        // dd($users);
        return redirect()->route('home', ['users' => $users, 'comments' => $comment])->with('success', 'Merci pour votre commentaire');
    }

    public function Payment()
    {
        $userName = User::find(Auth::id());
        $email = $userName->email;
        $name = $userName->name;
        $cardNumber = Cart::count();

        return view('front.panier.Payment',
            ['cardNumber' => $cardNumber,
            'username' => $name,
            'useremail' => $email,
            ]
        );
    }

    public function PaymentMethod(PaymentRequest $request)
    {
        $panier = Cart::content();
        // dd($panier);
        $total = Cart::subtotal();
        $cardNumber = Cart::count();
        $payment = Payment::create([
            'username' => $request->validated('name'),
            'email' => $request->validated('email'),
            'adresse' => $request->validated('adresse'),
            'total' => $total,
            'heure_livraison' => $request->validated('heure_livraison'),
            'somme_total' => $cardNumber,
            'content' => $panier,
        ]
        );
    }
}
