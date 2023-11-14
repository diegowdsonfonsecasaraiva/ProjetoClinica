<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Models\City;
use App\Models\Cidade;
use App\Models\Sexo;
use App\Models\Orientacao;
use App\Models\EstadoCivil;
use App\Models\Convenio;
use App\Models\Abordagem;
use Illuminate\Http\Request;

class PacientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        /**
         * php artisan make:migration create_pacientes_table 
         */
        //cidade
        $cities = City::query()->where('active', true)->orderBy('name', 'asc')->get();

        /**
         * @if(count($cities) > 0) 
         *      @foreach($cities as $city)
*                  adfafasdfasdf
         *      @endforeach
         * @endif
         */
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
