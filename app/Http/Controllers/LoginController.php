<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\User;
use DB;
class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function home()
    {
        $usr = DB::select("CALL HighestPoint();");
        return view('home.welcome', compact('usr'));
    }

    public function submit(Request $data)
    {
        ($data=Input::all());
        $email = $data['email'];
        $point = DB::table('users')->where('email',$email)->value('point');
        $jawab1 = $data['jawab1'];
        $id1 = $data['id1'];
        $jawab2 = $data['jawab2'];
        $id2 = $data['id2'];
        $jawab3 = $data['jawab3'];
        $id3 = $data['id3'];
        $jawab4 = $data['jawab4'];
        $id4 = $data['id4'];
        $jawab5 = $data['jawab5'];
        $id5 = $data['id5'];
        $jawab6 = $data['jawab6'];
        $id6 = $data['id6'];
        $jawab7 = $data['jawab7'];
        $id7 = $data['id7'];
        $jawab8 = $data['jawab8'];
        $id8 = $data['id8'];
        $jawab9 = $data['jawab9'];
        $id9 = $data['id9'];
        $jawab10 = $data['jawab10'];
        $id10 = $data['id10'];
        $jawab11 = $data['jawab11'];
        $id11 = $data['id11'];
        $jawab12 = $data['jawab12'];
        $id12 = $data['id12'];
        $jawab13 = $data['jawab13'];
        $id13 = $data['id13'];
        $jawab14 = $data['jawab14'];
        $id14 = $data['id14'];
        $jawab15 = $data['jawab15'];
        $id15 = $data['id15'];

        $result = DB::select("CALL CheckBenar('$id1', '$jawab1', '$email', '$point');");
        $array = json_decode(json_encode($result), true);
        $point = DB::table('users')->where('email',$email)->value('point');
        $result = DB::select("CALL CheckBenar('$id2', '$jawab2', '$email', '$point');");
        $array = json_decode(json_encode($result), true);
        $point = DB::table('users')->where('email',$email)->value('point');
        $result = DB::select("CALL CheckBenar('$id3', '$jawab3', '$email', '$point');");
        $array = json_decode(json_encode($result), true);
        $point = DB::table('users')->where('email',$email)->value('point');
        $result = DB::select("CALL CheckBenar('$id4', '$jawab4', '$email', '$point');");
        $array = json_decode(json_encode($result), true);
        $point = DB::table('users')->where('email',$email)->value('point');
        $result = DB::select("CALL CheckBenar('$id5', '$jawab5', '$email', '$point');");
        $array = json_decode(json_encode($result), true);
        $point = DB::table('users')->where('email',$email)->value('point');
        $result = DB::select("CALL CheckBenar('$id6', '$jawab6', '$email', '$point');");
        $array = json_decode(json_encode($result), true);
        $point = DB::table('users')->where('email',$email)->value('point');
        $result = DB::select("CALL CheckBenar('$id7', '$jawab7', '$email', '$point');");
        $array = json_decode(json_encode($result), true);
        $point = DB::table('users')->where('email',$email)->value('point');
        $result = DB::select("CALL CheckBenar('$id8', '$jawab8', '$email', '$point');");
        $array = json_decode(json_encode($result), true);
        $point = DB::table('users')->where('email',$email)->value('point');
        $result = DB::select("CALL CheckBenar('$id9', '$jawab9', '$email', '$point');");
        $array = json_decode(json_encode($result), true);
        $point = DB::table('users')->where('email',$email)->value('point');
        $result = DB::select("CALL CheckBenar('$id10', '$jawab10', '$email', '$point');");
        $array = json_decode(json_encode($result), true);
        $point = DB::table('users')->where('email',$email)->value('point');
        $result = DB::select("CALL CheckBenar('$id11', '$jawab11', '$email', '$point');");
        $array = json_decode(json_encode($result), true);
        $point = DB::table('users')->where('email',$email)->value('point');
        $result = DB::select("CALL CheckBenar('$id12', '$jawab12', '$email', '$point');");
        $array = json_decode(json_encode($result), true);
        $point = DB::table('users')->where('email',$email)->value('point');
        $result = DB::select("CALL CheckBenar('$id13', '$jawab13', '$email', '$point');");
        $array = json_decode(json_encode($result), true);
        $point = DB::table('users')->where('email',$email)->value('point');
        $result = DB::select("CALL CheckBenar('$id14', '$jawab14', '$email', '$point');");
        $array = json_decode(json_encode($result), true);
        $point = DB::table('users')->where('email',$email)->value('point');
        $result = DB::select("CALL CheckBenar('$id15', '$jawab15', '$email', '$point');");
        return view('home.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function join(Request $data)
    {
        ($data=Input::all());
        $email = $data['email'];
        $roomid = $data['roomid'];
        Session::flash('roomid', $roomid);
        Session::flash('email', $email);

        $result = DB::select("CALL CheckRoom('$roomid');");
        $array = json_decode(json_encode($result), true);

        if($array[0]["X"] == 1){
            $result = DB::select("CALL JoinRoom('$roomid', '$email');");
            $array = json_decode(json_encode($result), true);

            Session::flash('score', $array[0]["X"]);

            $idpert = DB::select("CALL CariIdPertanyaan('$roomid');");
            $room = json_decode(json_encode($idpert), true);

            $idperta = $room[0]["pertanyaan1"];
            $pert = DB::select("CALL CariPertanyaan('$idperta');");
            $arraypert1 = json_decode(json_encode($pert), true);

            $idperta = $room[0]["pertanyaan2"];
            $pert = DB::select("CALL CariPertanyaan('$idperta');");
            $arraypert2 = json_decode(json_encode($pert), true);

            $idperta = $room[0]["pertanyaan3"];
            $pert = DB::select("CALL CariPertanyaan('$idperta');");
            $arraypert3 = json_decode(json_encode($pert), true);

            $idperta = $room[0]["pertanyaan4"];
            $pert = DB::select("CALL CariPertanyaan('$idperta');");
            $arraypert4 = json_decode(json_encode($pert), true);

            $idperta = $room[0]["pertanyaan5"];
            $pert = DB::select("CALL CariPertanyaan('$idperta');");
            $arraypert5 = json_decode(json_encode($pert), true);

            $idperta = $room[0]["pertanyaan6"];
            $pert = DB::select("CALL CariPertanyaan('$idperta');");
            $arraypert6 = json_decode(json_encode($pert), true);

            $idperta = $room[0]["pertanyaan7"];
            $pert = DB::select("CALL CariPertanyaan('$idperta');");
            $arraypert7 = json_decode(json_encode($pert), true);

            $idperta = $room[0]["pertanyaan8"];
            $pert = DB::select("CALL CariPertanyaan('$idperta');");
            $arraypert8 = json_decode(json_encode($pert), true);

            $idperta = $room[0]["pertanyaan9"];
            $pert = DB::select("CALL CariPertanyaan('$idperta');");
            $arraypert9 = json_decode(json_encode($pert), true);

            $idperta = $room[0]["pertanyaan10"];
            $pert = DB::select("CALL CariPertanyaan('$idperta');");
            $arraypert10 = json_decode(json_encode($pert), true);

            $idperta = $room[0]["pertanyaan11"];
            $pert = DB::select("CALL CariPertanyaan('$idperta');");
            $arraypert11 = json_decode(json_encode($pert), true);

            $idperta = $room[0]["pertanyaan12"];
            $pert = DB::select("CALL CariPertanyaan('$idperta');");
            $arraypert12 = json_decode(json_encode($pert), true);

            $idperta = $room[0]["pertanyaan13"];
            $pert = DB::select("CALL CariPertanyaan('$idperta');");
            $arraypert13 = json_decode(json_encode($pert), true);

            $idperta = $room[0]["pertanyaan14"];
            $pert = DB::select("CALL CariPertanyaan('$idperta');");
            $arraypert14 = json_decode(json_encode($pert), true);

            $idperta = $room[0]["pertanyaan15"];
            $pert = DB::select("CALL CariPertanyaan('$idperta');");
            $arraypert15 = json_decode(json_encode($pert), true);


            $usr = DB::select("CALL HighestScore('$roomid');");

            return view('home.room', compact('usr', 'arraypert15', 'arraypert14', 'arraypert13', 'arraypert12', 'arraypert11', 'arraypert10', 'arraypert9', 'arraypert8', 'arraypert7', 'arraypert6', 'arraypert5', 'arraypert4', 'arraypert3', 'arraypert2', 'arraypert1'));
        }
        else{
            return view('home.login');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function log_in(Request $data)
    {
        ($data=Input::all());
        $email = $data['email'];
        $password = $data['password'];

        $result = DB::select("CALL Login('$email', '$password');");
        $array = json_decode(json_encode($result), true);
        
        if($array[0]["X"] != -99){
            Session::flash('email', $data['email']);
            Session::flash('point', $array[0]["X"]);
            return view('home.login');
        }
        else{
            Session::flash('success', 0);
            return redirect('/home');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function register(Request $data)
    {
        ($data=Input::all());

        $email = $data['email'];
        $password = $data['password'];
        $username = $data['userName'];

        $result = DB::select("CALL Register('$username', '$email', '$password');");
        $array = json_decode(json_encode($result), true);
        
        if($array[0]["X"] == 1){
            Session::flash('success', 1);
            return redirect('/home');
        }
        else{
            Session::flash('success', -1);
            return redirect('/home');
        }
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
