<?php

namespace App\Http\Controllers;

use App\Models\ProgramacaoDiva;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        $nome = "Bruno";
        $nome = strtoupper($nome);
        $idade = 29;
        $arr = [100,200,300,400,500];
        $nomes = ['Bruno','allan','Leandro','Matheus'];
    
        $date = date('d/m/Y');
    
        $dataAtual = Carbon::now(); // Obtém a data e hora local atual
        
        $dataFormatada = $dataAtual->format('d/m/Y H:i:s');// Você pode formatar a data de acordo com suas necessidades
        
        // conexão com o model
        $test = ProgramacaoDiva::get(); //Programacaodiva é o nome da tabela

        //dd($test->material);

        return view('teste', 
        [
            'nome'=> $nome, 
            'idade'=> $idade,
            'arr'=> $arr,
            'date'=> $date,
            'dataFormatada'=> $dataFormatada,
            'nomes'=> $nomes,
            'jsFilePath' => asset('js/scripts2.js'),
            'test' => $test,

        ]);
    }


}
