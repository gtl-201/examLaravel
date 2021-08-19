<?php

namespace App\Models;

use Exception;
use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class Customer extends Model
{
    use HasFactory;
    public static function createCus(
        $fname,
        $lname,
        $mkh,
        $gender,
        $email,
        $phone,
        $patch
    ) {
        try {
            DB::insert('insert into customer (Fname, Lname, mkh, gender, email, phone, avatar) values (?, ?, ?, ?, ?, ?, ?)', [$fname, $lname, $mkh, $gender, $email, $phone, $patch]);
        } catch (Exception $err) {
            Session::put('errSql',$err->getMessage());
            return false;
        }
        return true;
    }

    static function getAllCus($key)
    {
        if (empty($key)) {
            return DB::select('select * from customer');
        } else {
            return DB::table('customer')->select('*')   
            ->where('Fname', 'like', '%' . $key . '%')
            ->orWhere('Lname', 'like', '%' . $key . '%')
            ->orWhere('phone', 'like', '%' . $key . '%')
            ->get();
        }
    }
}
