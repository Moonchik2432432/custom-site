<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
use App\Models\Tvertne;
use App\Models\Amats;
use App\Models\Darbinieks;
use App\Models\Klients;

class DataController extends Controller
{
    public function showAllKlients()
    {
        $klients = new Klients();
        return view('allKlients',['klients' => $klients->orderBy('id', 'asc') ->get()]);
    }

    public function showAllTvertne()
    {
        $tvertne = new Tvertne();
        return view('allTvertne',['tvertne' => $tvertne->orderBy('ID', 'asc') ->get()]);
    }

    public function showAllAmats()
    {
        $amats = new Amats();
        return view('allAmats',['amats' => $amats->orderBy('id', 'asc') ->get()]);
    }


    public function showAllDarbinieks()
    {
        $darbinieks = new Darbinieks();
        return view('allDarbinieks',['darbinieks' => $darbinieks->orderBy('id', 'asc') ->get()]);
    }

    //Функций для удаления
    public function deleteTvertne($id)
    {
        Tvertne::find($id)->delete();
        return redirect()->to ('/data/allTvertne');
    }

    public function deleteAmats($id)
    {
        Amats::find($id)->delete();
        return redirect()->to ('/data/allAmats');
    }

    public function deleteKlients($id)
    {
        Klients::find($id)->delete();
        return redirect()->to ('/data/allKlients');
    }

    public function deleteDarbinieks($id)
    {
        Darbinieks::find($id)->delete();
        return redirect()->to ('/data/allDarbinieks');
    }

//Выводить подробную информацию
    public function showAmatsDetails($id)
{
    $amats = new Amats;
    return view('detailsAmats', ['amats' => $amats -> find($id)]);
}

public function showKlientsDetails($id)
{
    $klients = new Klients();
    return view('detailsKlietns', ['klients' => $klients -> find($id)]);
}

public function showTvertneDetails($id)
{
    $tvertne = new Tvertne;
    return view('detailsTvertne', ['tvertne' => $tvertne -> find($id)]);
}

public function showDarbinieksDetails($id)
{
    $darbinieks = new Darbinieks;
    return view('detailsDarbinieks', ['darbinieks' => $darbinieks -> find($id)]);
}

//______________________________________________________
//Создания
public function newSubmit(Request $dati)
{

    // return dd($dati->input('subject'));

    $validated = $dati->validate([
        'name' => 'required|string|min:3|max:255',
        'email' => 'required|email',
        'subject' => 'required|string|max:255',
        'message' => 'required|string',
    ]);

    $data = new Data();
    $data->name = $dati->input('name');
    $data->subject = $dati->input('subject');
    $data->email = $dati->input('email');
    $data->message = $dati->input('message');
    $data->save();

    return redirect('/contacts')->with('success', 'Ziņa veiksmīgi nosūtīta!');
}

public function createAmats()
{
    return view('createAmats'); // создаём шаблон createAmats.blade.php
}
public function newSubmitAmats(Request $amati)
{

    $validated = $amati->validate([
        'nosaukums' => 'required|string|min:3|max:90',
    ]);

    $amats = new Amats();
    $amats->nosaukums = $amati->input('nosaukums');
    $amats->save();

    return redirect('data/allAmats')->with('success', 'Ziņa veiksmīgi nosūtīta!');
}


public function createKlients()
{
    return view('createKlients'); 
}

public function newSubmitKlients(Request $klienti)
{
    $validated = $request->validate([
        'Uznenuma_nosaukums' => 'required|string|min:3|max:90',
        'Adrese' => 'required|string|min:3|max:90',
        'Talrunis' => 'nullable|string|max:20',
    ]);

    $klienti = new Klients();
    $klienti->Uznenuma_nosaukums = $klienti->input('Uznenuma_nosaukums');
    $klienti->Adrese = $klienti->input('Adrese');
    $klienti->Talrunis = $klienti->input('Talrunis');
    $klienti->save();

    return redirect('data/allKlients')->with('success', 'Ziņa veiksmīgi nosūtīta!');
}


public function createDarbinieks()
{
    $amati = Amats::all(); // чтобы выбрать должность
    return view('createDarbinieks', ['amati' => $amati]); 
}
public function newSubmitDarbinieks(Request $request)
{
    $validated = $request->validate([
        'Vards' => 'required|string|max:255',
        'Uzvards' => 'required|string|max:255',
        'Amats_ID' => 'required|integer', // проверка просто число, без проверки существования
        'Talrunis' => 'nullable|string|max:20',
        'Lietotajs' => 'required|string|max:50',
        'Parole' => 'required|string|max:255',
    ]);


        $darbinieks = new Darbinieks();
        $darbinieks->Vards = $request->input('Vards');
        $darbinieks->Uzvards = $request->input('Uzvards');
        $darbinieks->Amats_ID = $request->input('Amats_ID');
        $darbinieks->Talrunis = $request->input('Talrunis');
        $darbinieks->Lietotajs = $request->input('Lietotajs');
        $darbinieks->Parole = $request->input('Parole');
        $darbinieks->save();

    return redirect('/data/allDarbinieks')->with('success', 'Darbinieks veiksmīgi pievienots!');
}

//______________________________________________________
//Редактирования
public function editAmats($id)
{
    $amats = Amats::find($id);
    if (!$amats) {
        return redirect('/data/allAmats')->with('error', 'Amats nav!');
    }
    return view('editAmats', ['amats' => $amats]);
}

public function updateAmats(Request $request, $id)
{
    $validated = $request->validate([
        'nosaukums' => 'required|string|min:3|max:90',
    ]);
    $amats = Amats::find($id);
    if (!$amats) {
        return redirect('/data/allAmats')->with('error', 'Amats nav!');
    }
    $amats->nosaukums = $request->input('nosaukums');
    $amats->save();
    return redirect('/data/allAmats')->with('success', 'Amats veiksmīgi atjaunināts!');
}


public function editKlients($id)
{
    $klients = Klients::find($id);
    if (!$klients) {
        return redirect('/data/allKlients')->with('error', 'Klients nav!');
    }
    return view('editKlients', ['klients' => $klients]);
}

public function updateKlients(Request $request, $id)
{
    $validated = $request->validate([
        'Uznenuma_nosaukums' => 'required|string|min:3|max:90',
        'Adrese' => 'required|string|min:3|max:90',
        'Talrunis' => 'nullable|string|max:20',
    ]);
    $klients = Klients::find($id);
    if (!klients) {
        return redirect('/data/allKlients')->with('error', 'Klients nav!');
    }
    $klients->Uznenuma_nosaukums = $request->input('Uznenuma_nosaukums');
    $klients->Adrese = $request->input('Adrese');
    $klients->Talrunis = $request->input('Talrunis');
    $klients->save();
    return redirect('/data/allKlients')->with('success', 'Klients veiksmīgi atjaunināts!');
}


public function editDarbinieks($id)
{
    $darbinieks = Darbinieks::find($id);
    $amati = Amats::all();
    if (!$darbinieks) {
        return redirect('/data/allDarbinieks')->with('error', 'Darbinieks nav!');
    }
    return view('editDarbinieks', ['darbinieks' => $darbinieks, 'amati' => $amati]);
}

public function updateDarbinieks(Request $request, $id)
{
$validated = $request->validate([
    'Vards' => 'required|string|max:255',
    'Uzvards' => 'required|string|max:255',
    'Amats_ID' => 'required|integer', // проверка просто число, без проверки существования
    'Talrunis' => 'nullable|string|max:20',
    'Lietotajs' => 'required|string|max:50',
    'Parole' => 'required|string|max:255',
]);

    $darbinieks = Darbinieks::find($id);
    if (!$darbinieks) {
        return redirect('/data/allDarbinieks')->with('error', 'Darbinieks nav!');
    }

    $darbinieks = new Darbinieks();
    $darbinieks->Vards = $request->input('Vards');
    $darbinieks->Uzvards = $request->input('Uzvards');
    $darbinieks->Amats_ID = $request->input('Amats_ID');
    $darbinieks->Talrunis = $request->input('Talrunis');
    $darbinieks->Lietotajs = $request->input('Lietotajs');
    $darbinieks->Parole = $request->input('Parole');
    $darbinieks->save();

    return redirect('/data/allDarbinieks')->with('success', 'Darbinieks veiksmīgi atjaunināts!');
}

}
