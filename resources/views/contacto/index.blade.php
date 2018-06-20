@extends('layouts.app1')

@section('content')


<div class="container">

    <br>

    <div class="row">

        <div class="col-md-3">
            <h3 class="text-center">Contactanos</h3>

            <img src="img/mercadeo.png" alt="..." class="img">
        </div>

        <div class="col-md-6">
            <h3>Pc Jogza Campeche</h3>
            <p>Tu tienda de cómputo de confianza</p>

            <h3>Dirección</h3>
            <p>Avenida Miguel Aleman #168 Colonia Guadalupe, Campeche Campeche CP 24010</p>

            <h3>Teléfono</h3>
            <p>Matriz Campeche: 929 80 72</p>
            <p>Sucursal Champotón: 828 27 61</p>
        </div>

    </div>

    <div class="container">

        <div class="form-group">

                <form class="">

                        <div class="form-row">

                            <div class="col-md-4 mb-3">
                                <label for="validationDefault01">Nombre:</label>
                                <input type="text" class="form-control" id="validationDefault01" placeholder="introducir nombre" value="">
                            </div>

                        <div class="col-md-4 mb-3">
                            <label for="validationDefault02">Teléfono:</label>
                            <input type="int" class="form-control" id="validationDefault02" placeholder="teléfono o celular" value="">
                        </div>

                            <div class="col-md-4 mb-3">
                                  <label for="validationDefaultUsername">Email:</label>
                            <div class="input-group">
                                <input type="email" class="form-control" id="validationDefaultUsername" placeholder="ejemplo@hotmail.com" aria-describedby="inputGroupPrepend2">
                          </div>
                        </div>

                    </div>
                </form>

                <div class="row">
                    <form class="col-md-12" action="">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Mensaje:</label>
                                <textarea class="form-control col-md-12" id="exampleFormControlTextarea1" rows="3" placeholder="Introduzca su mensaje.."></textarea>
                            </div>

                            <button class="btn btn-primary float-right col-md-3" type="submit">Enviar mensaje</button>
                    </form>
                </div>

        </div>





    </div>

</div>

@endsection