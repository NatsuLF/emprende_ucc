@extends('layouts.master')

@section('title', 'Home')

@section('content')
    @include('shared.slide')
    @include('shared.myv')

    <footer>
        <center>
            <div class="well col-md-8 col-md-offset-2">
                <p>
                    Direccion
                    <br>
                    <i class="fa fa-map" aria-hidden="true"></i>
                    Costado Oeste Campus Medico - UNAN-Leon
                    <br><br>
                    Telefonos
                    <br>
                    <i class="fa fa-phone" aria-hidden="true"></i> 2311-3456
                    <br>
                    <i class="fa fa-phone" aria-hidden="true"></i> 2311-6754
                    <br><br>
                    <i class="fa fa-envelope" aria-hidden="true"></i> Email:
                    <a href="mailto:leodota7@gmail.com">merchandise@apicola.com</a>
                </p>
                <h5>Proyecto de Tranferencia Tecnologica Apicola - UCC León</h5>
            </div>
        </center>
    </footer>
@endsection