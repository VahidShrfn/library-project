<?php

namespace App\Http\Controllers;
use App\books;
use App\Models\books as ModelsBooks;
use App\Models\libusers as Modelslibusers;
use App\Models\user_bought as Modelsuser_bought;
use App\Models\user_fav as Modelsuser_fav;
use App\Models\rocommend as Modelrecommendation;
use App\libusers;
use App\Models\user_fav;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
    public function index() {


        
        if(request('logout')==1){
            Session::put('login',0);
            Session::put('userID',null);
        }



        $books=  ModelsBooks::all();

        //print_r($books);

        return view('welcome',['books'=>$books]);



    }
    
    public function newBooks(){
        
        $books=  ModelsBooks::all();

        return view('newBooks', ['books'=>$books]);

    }

    public function suggestion(){

        $books=  ModelsBooks::all();

        return view('suggestion', ['books'=>$books]);

    }

    public function boughtBooks(){

        $id=request('id');
        error_log($id);

        return view('boughtBooks');


        //return view('boughtBooks');

    }



    


    public function ls(){
        $ls=request('ls');
        
        if($ls=='login'){

            $username=request('username');
            $password=request('password');
            $user = new Modelslibusers();
            $user= Modelslibusers::where('username', $username)->first();
            if($user->password == $password){
                
                Session::put('login','1');
                Session::put('userID',$user->id);
                $books=  ModelsBooks::all();
                return view('welcome',['books'=>$books]);
            }else{
            return redirect('/')->with('msg','نام کاربری یا رمز عبور نادرست است...');
            }   
        
        }else{

            $user = new Modelslibusers();
            $user->name = request('name');
            $user->username = request('username');
            $user->password = request('password');
            $user->email = request('email');
            $user->phone_Number = request('phonenumber');
        
            $user->save();

            return redirect('/')->with('msg','اطلاعات شما با موفقیت ثبت شد..');

        }

    }

    
    public function book(){
        $id=request('id');
        $buy=request('buy');
        
        if(session()->has('login') && Session::get('login')==1){
            
            $userId=Session::get('userID');
            if($buy==1){
                
                $user = new Modelsuser_bought();
                $user-> book_id=$id;
                $user-> user_id=$userId;
                $user->save();
    
            }
            if($buy==2){
                $user = new user_fav();// Modelsuser_fav();
                $user-> book_id=$id;
                $user-> user_id=$userId;
                $user->save();
            }
            

        }
        


        $book=ModelsBooks::where('id',$id)->first();
        return view('book',['book'=>$book , 'buy'=> $buy]);


        

    }


    public function recommendation(){
        

    }
    


}
