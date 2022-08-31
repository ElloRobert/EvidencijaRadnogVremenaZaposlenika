<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Poduzeca;
use App\Exports\PoduzecaExport;
use App\Models\Zaposlenici;
use App\Exports\UserExport;
use App\Models\OdradeniRad;
use App\Exports\RadExport;
use App\Models\User;
use Faker\Core\DateTime;
use Maatwebsite\Excel\Facades\Excel;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $trenutniKorisnik = Auth::user();
        $pocetna =1;
        if($trenutniKorisnik->hasRole('admin')){
        $poduzeca = Poduzeca::all();
        $brojPoduzeca= count($poduzeca);
        $zaposlenici = User::all();
        $brojZaposlenika = count($zaposlenici);
        $odradeniRadovi = OdradeniRad::all();
        $brojOdradenihRadova = count($odradeniRadovi);  
        }

        else{
        $poduzeca = Poduzeca::all();
        $brojPoduzeca= count($poduzeca);
        $zaposlenici = User::all()->where('id',$trenutniKorisnik->id);

        $brojZaposlenika = 1;
        $odradeniRadovi = OdradeniRad::all()->where('zaposlenik_id',$trenutniKorisnik->id);
        $brojOdradenihRadova = count($odradeniRadovi);
        }
        //dd($brojPoduzeca);
        return view('home')->with('brojPoduzeca',$brojPoduzeca)->with('poduzeca',$poduzeca)->with('brojZaposlenika',$brojZaposlenika)
        ->with('zaposlenici',$zaposlenici)->with('brojOdradenihRadova',$brojOdradenihRadova)->with('odradeniRadovi',$odradeniRadovi)
        ->with('pocetna',$pocetna);     
    }

    public function natrag()
    {
     return redirect()->back();
    }

    public function dodajPoduzece(){
     return view('Poduzece/novoPoduzece');
    }

    public function novoPoduzece(Request $request){
        $poduzece = new Poduzeca;

        $poduzece->nazivPoduzeca = $request->input('nazivPoduzeca');
        $poduzece->datumOsnutka = $request->input('datumOsnutka');
        $poduzece->vlasnik = $request->input('vlasnik');
        $poduzece->OIB = $request->input('OIB');
        $poduzece->kontakt = $request->input('kontakt');
        $poduzece->email = $request->input('email');
        $poduzece->ulica = $request->input('ulica');
        $poduzece->kucniBroj = $request->input('kucniBroj');
        $poduzece->mjesto = $request->input('mjesto');
        $poduzece ->save();

        return  redirect('home');
    }

    public function urediPoduzece($id){
        $poduzece = Poduzeca::find($id);
        return view('Poduzece/urediPoduzece')->with('poduzece',$poduzece);
    }

    public function uredenoPoduzece(Request $request){
        $id = $request->input('id');
        $poduzece = Poduzeca::find($id);

        $poduzece->nazivPoduzeca = $request->input('nazivPoduzeca');
        $poduzece->datumOsnutka = $request->input('datumOsnutka');
        $poduzece->vlasnik = $request->input('vlasnik');
        $poduzece->OIB = $request->input('OIB');
        $poduzece->kontakt = $request->input('kontakt');
        $poduzece->email = $request->input('email');
        $poduzece->ulica = $request->input('ulica');
        $poduzece->kucniBroj = $request->input('kucniBroj');
        $poduzece->mjesto = $request->input('mjesto');
        $poduzece ->save();

        return  redirect('home');
    }

    public function obrisiPoduzece($id){
        $poduzece = Poduzeca::find($id);
        $poduzece->delete();
        return redirect('home');
    }

    public function export() 
    {
        return Excel::download(new PoduzecaExport, 'Poduzeca.xlsx');
    }

    public function pregledajPoduzece($id){
        $poduzece = Poduzeca::find($id);
        return view('Poduzece/pregledajPoduzece')->with('poduzece',$poduzece);
    }
    
    public function dodajZaposlenika(){
        return view('Zaposlenici/noviZaposlenik');
       }
    public function noviZaposlenik(Request $request){
        $zaposlenik = new User();

        $zaposlenik->ime = $request->input('ime');
        $zaposlenik->prezime = $request->input('prezime');
        $zaposlenik->spol = $request->input('spol');
        $zaposlenik->datumRodenja = $request->input('datumRodenja');
        $zaposlenik->OIB = $request->input('OIB');
        $zaposlenik->kontakt = $request->input('kontakt');
        $zaposlenik->email = $request->input('email');
        $zaposlenik->ulica = $request->input('ulica');
        $zaposlenik->kucniBroj = $request->input('kucniBroj');
        $zaposlenik->mjestoStanovanja = $request->input('mjestoStanovanja');
        $zaposlenik->radnoMjesto = $request->input('radnoMjesto');
        $zaposlenik->name = $request->input('name');
        $zaposlenik->poduzece_id = 1;
        if($request->input('password') == $request->input('password_confirmation')){
            $zaposlenik->password = Hash::make($request->input('password')) ;
            }
            $zaposlenik->assignRole('zaposlenik');
        $zaposlenik ->save();

        return  redirect('home');
    }
    

    public function urediZaposlenika($id){
        $zaposlenik = User::find($id);
        return view('Zaposlenici/urediZaposlenika')->with('zaposlenik',$zaposlenik);
    }

    public function uredeniZaposlenik(Request $request){
        $id=$request->input('id');
        $zaposlenik = User::find($id);

        $zaposlenik->ime = $request->input('ime');
        $zaposlenik->prezime = $request->input('prezime');
        $zaposlenik->spol = $request->input('spol');
        $zaposlenik->datumRodenja = $request->input('datumRodenja');
        $zaposlenik->OIB = $request->input('OIB');
        $zaposlenik->kontakt = $request->input('kontakt');
        $zaposlenik->email = $request->input('email');
        $zaposlenik->ulica = $request->input('ulica');
        $zaposlenik->kucniBroj = $request->input('kucniBroj');
        $zaposlenik->mjestoStanovanja = $request->input('mjestoStanovanja');
        $zaposlenik->radnoMjesto = $request->input('radnoMjesto');
        $zaposlenik->name = $request->input('name');
        if($request->input('password') == $request->input('password_confirmation')){
            $zaposlenik->password = Hash::make($request->input('password')) ;
            }
        $zaposlenik ->save();

        return  redirect('home');
    }

    public function pregledajZaposlenika($id){
        $zaposlenik = User::find($id);
        return view('Zaposlenici/pregledajZaposlenika')->with('zaposlenik',$zaposlenik);
    }

    public function obrisiZaposlenika($id){
        $zaposlenik = User::find($id);
        $zaposlenik->delete();
        return redirect('home');
    }

    public function exportZaposlenici() 
    {
        return Excel::download(new UserExport, 'Zaposlenici.xlsx');
    }

    public function zapocniRad(){
        $rad = new OdradeniRad;
        $rad->datumRada =date('Y-m-d');
        $rad->pocetakRada = date(' Y-m-d H:i:s');
        $rad->Status = 'U tijeku';
        $rad->zaposlenik_id= Auth::user()->id;
        $rad ->save();
        return redirect('home');
    }

    public function zavrsiRad(){
        $rad = OdradeniRad::all()->where('zaposlenik_id',Auth::user()->id)->last();
        $rad->krajRada = date(' Y-m-d H:i:s');
        $rad->Status = 'Završen';
        $date = Carbon::parse($rad->pocetakRada);
        $diff = $date->diffInHours( $rad->krajRada);
        if($diff>8){
            $prekovremeni = ($diff*10-80)/10;
             $rad->prekovremeniRad = $prekovremeni;
             $rad->redovitiRad = 8;
        }
        else{
        $rad->redovitiRad = $diff;
        }
        $rad ->save();
        return redirect('home');

    }

    public function dodajRad(){
        return view('Rad/noviRad');
       }

    public function noviRad(Request $request){
        $rad = new OdradeniRad();
        $rad->datumRada = $request->input('datumRada');
        $rad->pocetakRada = $request->input('pocetakRada');
        $rad->krajRada = $request->input('krajRada');
        $rad->Status = 'Završen';
        $rad->zaposlenik_id= Auth::user()->id;
        $date = Carbon::parse($rad->pocetakRada);
        $diff = $date->diffInHours( $rad->krajRada);
        if($diff>8){
            $prekovremeni = ($diff*10-80)/10;
             $rad->prekovremeniRad = $prekovremeni;
             $rad->redovitiRad = 8;
        }
        else{
        $rad->redovitiRad = $diff;
        }
        $rad->kasnjenje = $request->input('kasnjenje');
        $rad->zastoj = $request->input('zastoj');
        $rad->terenskiRad = $request->input('terenskiRad');
        $rad->Nenazocnost = $request->input('Nenazocnost');
        $rad ->save();
        return  redirect('home');
    }

    public function pregledajRad($id){
        $rad = OdradeniRad::find($id);
        return view('Rad/pregledajRad')->with('rad',$rad);
    }

    public function urediRad($id){
        $rad = OdradeniRad::find($id);
        return view('Rad/urediRad')->with('rad',$rad);
    }

    public function uredeniRad(Request $request){
        
        $id=$request->input('id');
        $rad = OdradeniRad::find($id);

        $rad->datumRada = $request->input('datumRada');
        $rad->pocetakRada = $request->input('pocetakRada');
        $rad->krajRada = $request->input('krajRada');
        $rad->Status = 'Završen';
        $date = Carbon::parse($rad->pocetakRada);
        $diff = $date->diffInHours( $rad->krajRada);
        if($diff>8){
            $prekovremeni = ($diff*10-80)/10;
             $rad->prekovremeniRad = $prekovremeni;
             $rad->redovitiRad = 8;
        }
        else{
        $rad->redovitiRad = $diff;
        }
        $rad->kasnjenje = $request->input('kasnjenje');
        $rad->zastoj = $request->input('zastoj');
        $rad->terenskiRad = $request->input('terenskiRad');
        $rad->Nenazocnost = $request->input('Nenazocnost');

        
        $rad ->save();

        return  redirect('home');
    }

    public function obrisiRad($id){
        $rad = OdradeniRad::find($id);
        $rad->delete();
        return redirect('home');
    }

    public function exportRad() 
    {
        return Excel::download(new RadExport, 'OdradeniRad.xlsx');
    }
    
    public function urediTrenutnogKorisnika() 
    {
        return view('Zaposlenici/urediTrenutnogKorisnika');
    }


    
 public function uredeniTrenutniKorisnik(Request $request){
        $id=$request->input('id');
        $korisnik = User::find($id);

        $korisnik->ime = $request->input('ime');
        $korisnik->prezime = $request->input('prezime');
        $korisnik->spol = $request->input('spol');
        $korisnik->datumRodenja = $request->input('datumRodenja');
        $korisnik->OIB = $request->input('OIB');
        $korisnik->kontakt = $request->input('kontakt');
        $korisnik->email = $request->input('email');
        $korisnik->ulica = $request->input('ulica');
        $korisnik->kucniBroj = $request->input('kucniBroj');
        $korisnik->mjestoStanovanja = $request->input('mjestoStanovanja');
        $korisnik->radnoMjesto = $request->input('radnoMjesto');
        if($request->input('password') == $request->input('password_confirmation')){
        $korisnik->password = Hash::make($request->input('password')) ;
        }
        $korisnik ->save();

        return  redirect('home');
    }





    
}
