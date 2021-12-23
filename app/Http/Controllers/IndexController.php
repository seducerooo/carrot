<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Access;
use Illuminate\Http\Request;
use App\Models\Index;

use Illuminate\Support\Facades\DB;


class IndexController extends Controller
{
    public function contact_store(){
        $contact = new Contact();
        $contact->firstName = request('firstName');
        $contact->lastName = request('lastName');
        $contact->companyName = request('companyName');
        $contact->email = request('email');
        $contact->phoneNumber = request('phoneNumber');
        $contact->save();
        return redirect()->route('IndexPage');
    }
    public function access_one_store(){
        $early = new Access();
        $early->username = request('username');
        $early->email = request('email');
        $early->save();
        return redirect()->route('IndexPage');
    }
    public function index(){
        $inf =DB::table('contacts')->get()->toArray();
                             return view('index',compact('inf'));
    }
    public function home(){
     $brands = DB::table('brands')->get()->toArray();
                             return view('main_pages.main-landing',compact('brands'));
    }
    public function products(){
        return view('main_pages.products');
    }
    public function integrations(){
        return view('main_pages.integrations');
    }
    public function learn(){
        return view('main_pages.learning_support');
    }
    public  function about_us(){
        $brands = DB::table('brands')->get()->toArray();
        return view('main_pages.about_us',compact('brands'));
    }
    public function contact_us(){
        return view('main_pages.contact_us');
    }

    public function access_one(){
        return view('main_pages.early_access_one');
    }
    public function access_two(){
        return view('main_pages.early_access_two');
    }
}
