<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CustomAuthController extends Controller
{

    public function index()
    {
        return view('auth.login');
    }  
      
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('Signed in');
        }
  
        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        return view('auth.registration');
    }
      
    public function customRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();

        //
        $file = $request->file('fileToUpload');
        $fileName = $file->getClientOriginalName();
        $destinationPath = 'uploads';
        $file->move($destinationPath,$file->getClientOriginalName());

        $data['fileName'] = $fileName;
        $check = $this->create($data);
         
        return redirect("dashboard")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'phone' => $data['phone'],
        'image' => $data['fileName'],
        'password' => Hash::make($data['password'])
      ]);
    }    
    
    public function dashboard()
    {
        if(Auth::check()){
            //lấy thông tin user hiện đang đăng nhập
            $user = Auth::user();
            return view('dashboard', ['data' =>$user]);

        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    
    public function signOut() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }

    public function list(){
        //Lấy dữ liệu từ database
        $news = DB::table('users')->select('*');
        $news = $news->get();
        //Phân trang bằng hàm hỗ trợ của laravel
        $news = User::paginate(1);
        
        //Chuyển đổi đối tượng stdClass thành mảng
        // $array = json_decode(json_encode($items), True);

        return view('list',['data' => $news]);
    }
}