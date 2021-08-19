<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class homeController extends Controller
{
    public function home()
    {
        return view('page.cus');
    }
    public function create()
    {
        return view('page.form');
    }

    public function createCus(Request $request)
    {
        $fname = $request->fname;
        $lname = $request->lname;
        $mkh = $request->mkh;
        $gender = $request->gender;
        $email = $request->email;
        $phone = $request->phone;

        // if (null !== file('avatar')) {
            $file = time() . "." . $request->file('avatar')->getClientOriginalExtension();
            $request->file('avatar')->storeAs('public', $file);
            $patch = 'storage/' . $file;
        // } else {
        //     $patch = '';
        // }

        $rs = Customer::createCus(
            $fname,
            $lname,
            $mkh,
            $gender,
            $email,
            $phone,
            $patch,
        );
        if ($rs) {
            return redirect('/customers');
        } else {
            return view('page.form')->with('err',Session::get('errSql'));
        }
    }

    public function getAllCus(Request $reques){
        $rs = Customer::getAllCus($reques->key);
        // if($reques->key) {
            return view('page.cus')->with('listCus', $rs);
        // } else {
        //     redirect("/Customers");
        // }
    }
}
