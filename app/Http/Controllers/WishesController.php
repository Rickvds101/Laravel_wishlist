<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wish;
use App\User;

class WishesController extends Controller
{


    public function submit(request $request)
    {


        $this->validate($request, [
            'wens' => 'required',
            'foto' => 'required|image',
            'bericht' => 'required',
            'prijs' => 'required',
            'link' => 'required'
        ]);



        $wish = new wish();
        $wish->wens = request('wens');
        $wish->foto = request('foto')->store('uploads', 'public');
        $wish->bericht = request('bericht');
        $wish->userId = request('userId');
        $wish->prijs = request('prijs');
        $wish->link = request('link');

        $wish->save();
        return redirect('/beheer');


    }

    public function homeWishes()
    {
        $wishes = Wish::all();
        return view('home', ['wishes' => $wishes]);
    }

    public function showUsers()
    {
        $users = User::all();
        return view('maak_wish', ['users' => $users]);
    }



    public function beheerWishes()
    {
        $wishes = Wish::all();
        return view('beheer', ['wishes' => $wishes] );
    }



    public function showWishes()
    {
        $wishes = Wish::all();
        return view('delete_wish', ['wishes' => $wishes]);
    }

    public function printWishes()
    {
        $wishes = Wish::all();
        return view('update_Wish', ['wishes' => $wishes]);
    }


    public function verwijderWishes(){
        $wens = $_POST['lijst_wensen'];
        Wish::where('wens', $wens)->delete();
        return redirect('delete_wish');
    }

    public function updateWishes(Request $request){
        $oude_wens = $_POST['oude_wens'];
        $x = $_POST['oude_wens'];


        $wish = new wish();
        $wish->wens = request('nieuwe_wens');
        $wish->foto = request('foto')->store('uploads', 'public');
        $wish->bericht = request('bericht');
        $wish->prijs = request('prijs');
        $wish->link = request('link');

        Wish::where('wens', $x)->update([
            'wens' => $wish->wens,
            'foto' => $wish->foto,
            'prijs' => $wish->prijs,
            'link' => $wish->link,
            'bericht' => $wish->bericht
        ]);

        return redirect('delete_wish');
    }
}



