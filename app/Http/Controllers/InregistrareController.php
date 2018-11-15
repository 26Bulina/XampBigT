<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Angajat;   /*specific tabela cu care vreau sa lucrez, probabil si mai multe */

class InregistrareController extends Controller
{

        public function inregistrare(Request $request)
        {
            $this->validate($request, 
            [
                'username' => 'required',
                'hire_date' => 'required',
                'email' => 'required',
                'password' => 'required'

            ]);
            
        $angajats = new Angajat;
        $angajats -> username = $request -> input('username');
        $angajats -> hire_date = $request -> input('hire_date');
        $angajats -> email = $request -> input('email');
        $angajats -> password = $request -> input('password');
        $angajats -> save();
        return redirect ('users') -> with('response','Utilizator introdus cu succes!');

        }

}
