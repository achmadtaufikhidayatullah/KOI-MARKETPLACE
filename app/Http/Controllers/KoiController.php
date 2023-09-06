<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Mail;
use App\Mail\verificationMail;

class KoiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('landing.home');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function registForm()
    {
        return view('landing.register');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postRegist(Request $request)
    {
        // dd($request->all());
        // $apiUrl = 'https://demo.staging.resellr.id/api/register-reseller-api';
        $apiUrl = 'https://app.resellr.id/api/register-reseller-api';

        // setup no_telp by rule
        if(!preg_match("/[^+0-9]/",trim($request->phone))){
          // cek apakah no hp karakter ke 1 dan 2 adalah angka 62
          if(substr(trim($request->phone), 0, 2)=="62"){
              $phone    =substr(trim($request->phone), 2);
          }
          // cek apakah no hp karakter ke 1 adalah angka 0
          else if(substr(trim($request->phone), 0, 1)=="0"){
              $phone    =substr(trim($request->phone), 1);
          }else{
              $phone = $request->phone;
          }
        }

        $response = Http::asForm()->post( $apiUrl , [
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'accountType' => $request->accountType,
            'plan' => $request->plan,
            'store_reference' => $request->store_reference,
        ]);

        $responseData = json_decode($response , true);

        // dd($responseData);

        if($responseData['status'] == 500){
          return redirect()->back()->with('alert_success' , 'Terdapat kesalahan, silahkan coba kembali!');
        }else{
          $mailData = [
              'name' => $request->name,
              'password' => $responseData['password'],
              'url' => $responseData['activationUrl'],
          ];

          Mail::to($request->email)->send(new verificationMail($mailData));

          return redirect()->route('login.form')->with('alert_success' , 'Silahkan check email anda untuk melakukan aktivasi
                              akun.');
        }
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function loginForm()
    {
        return view('landing.login');
    }


    public function ProductByCat()
    {
        return view('landing.food');
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
