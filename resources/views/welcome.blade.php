@extends('layouts.master')

@section('content')
    <div class="container-fluid bg-dark text-white">

        <form method="GET">
            <div class="row">
                <div class="col-2">
                    <div class="p-3">
                        <label for="nev">Név:</label>
                        <input type="text" name="nev" id="nev" class="form-control" placeholder="Kmint Károly" value="{{request()->input('nev')}}">
                    </div>
                </div>
                <div class="col-2">
                    <div class="p-3">
                        <label for="szuletesi_datum">Születési dátum:</label>
                        <input type="date" name="szuletesi_datum" id="szuletesi_datum" class="form-control">
                    </div>
                </div>
                <div class="col-2">
                    <div class="p-3">
                        <label for="email">E-mail:</label>
                        <input type="email" name="email" id="email" class="form-control"
                            placeholder="oscar@oscarx.hu">
                    </div>
                </div>
                <div class="col-2">
                    <div class="p-3">
                        <label for="telefonszam">Telefonszám:</label>
                        <input type="text" name="telefonszam" id="telefonszam" class="form-control"
                            placeholder="+36202635232">
                    </div>
                </div>
                <div class="col-2">
                    <div class="p-3">
                        <label for="t_id">Település:</label>
                        <select name="t_id" id="t_id" class="form-select">
                            <option value="0">Válassz</option>
                            @foreach ($telepulesek as $telepules)
                                <option value="{{$telepules->t_id}}">{{$telepules->nev}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-2">
                    <div class="p-3">
                        <label for="ny_id">Beszélt nyelv:</label>
                        <select name="ny_id" id="ny_id" class="form-select">
                            <option value="0">Válassz</option>
                        </select>
                    </div>
                </div>

            </div>
            <div class="row mt-3">
                <div class="col-12">
                    <div class="pb-3">
                        <button type="submit" class="btn btn-primary w-100">Keresés</button>
                    </div>
                </div>
            </div>
        </form>
    </div>



    <div class="container my-5">
        <div class="row">
            @foreach ($diakok as $diak)
                <div class="col-3">
                    <div class="card mb-4">
                        <img class="card-img-top" src="{{asset('img/img_avatar1.png')}}" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">{{$diak->nev}}</h4>
                            <p class="card-text">
                                {{$diak->nyelvek->pluck('nyelv')->implode(', ') ?: 'Nem beszél nyelvet'}}
                                <br>
                                Szül: {{$diak->szuletesi_datum}}
                            </p>
                            <a href="#" class="btn btn-primary">See Profile</a>
                        </div>
                    </div>
                </div>
            @endforeach
           
        </div>
    </div>
@endsection
