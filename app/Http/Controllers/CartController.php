<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCard(Request $request, $id)
    {

        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "product_name" => $product->title,
                "photo" => $product->thunm,
                "price" => $product->price,
                "quantity" => 1
            ];
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product add to cart successfully!');

    }
    public function addCart(Request $request, $id)
    {
        $quantity = $request->input('quantity');
        $product = Product::findOrFail($id);
        $cart = session()->get('cart', []);
        if (isset($cart[$id])) {
            $cart[$id]['quantity'] += $quantity;
        } else {
            $cart[$id] = [
                "product_name" => $product->title,
                "photo" => $product->thunm,
                "price" => $product->price,
                "quantity" => $quantity
            ];
        }
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product add to cart successfully!');

    }
    public function shopCart()
    {

        return view('user.cart');
    }
    public function update(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart successfully updated!');
        }
    }
    public function remove(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product successfully removed!');
        }
    }
    public function checkOut()
    {
        return view('user.checkout');
    }
    public function doneBill(Request $request)
    {
        $bill_code = random_int(1, 1000000);
        $id_user = $request->input('user_id');
        $cart_bill = $request->input('cart_bill');
        $total = $request->input('total');
        $address = $request->input('address');
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $date = $request->input('date');
        $pay = $request->input('pay');
        $data = [
            'billcode' => $bill_code,
            'id_user' => $id_user,
            'address' => $address,
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'cart_bill' => $cart_bill,
            'paymain' => $pay,
            'total' => $total,
            'date' => $date,
            'status' => 2,
        ];
        Bill::create($data);
        session()->remove('cart');
        return redirect()->route('account.index')->with('success', 'Your order successed');
    }
}
