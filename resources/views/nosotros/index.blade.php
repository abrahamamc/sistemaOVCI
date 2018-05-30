@extends('layouts.app1')


@section('nosotros')

<div class="col-md-12 text-center">
        <h2>Nosotros</h2>
    </div>


    <div class="col-12">
        <br>
    </div>

    <div class="col-md-6 text-center">
        {{-- <img class="img-thumbnail rounded" src="img/imgen1.jpg" alt=""> --}}
        <h3>Visión</h3>

        <p class="text-justify">
            Ser una empresa líder, que proporcione soluciones totales, en Tecnología Informática,
            que satisfagan las necesidades, del mercado. 
        </p>
    </div>

    <div class="col-md-6 text-center">
        <h3>Misión</h3>

        <p class="text-justify">
            Proporcionar soluciones totales, con los más altos estándares de calidad en computadoras ,
            periféricos y accesorios de Tecnología Informática, determinados a desarrollar y mantener continuamente,
            la excelencia en: estrategias de negocios, soporte técnico especializado y servicios al cliente.
        </p>
    </div>

    <div class="col-12">
        <br>
    </div>
    <div class="col-12">
        <br>
    </div>

    <div class="col-md-12 text-center">
        <h3>Nuestros Valores</h3>            
    </div>

    <div class="card-group">

            <div class="card">
              {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
              <div class="card-body">
                <h5 class="card-title text-center">Disciplina</h5>
                <p class="card-text text-justify">
                    Para cumplir nuestros compromisos con profesionalismo, con comunicación abierta y planeando apropiadamente cada proyecto.
                </p>
                
              </div>
            </div>

            <div class="card">
              {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
              <div class="card-body">
                <h5 class="card-title text-center">Trabajo en Equipo</h5>
                <p class="card-text text-justify">
                    Para alcanzar las metas planteadas, con respeto y confianza, reconociendo y compensando los logros de cada miembro del equipo.
                </p>
                
              </div>
            </div>

            <div class="card">
              {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
              <div class="card-body">
                <h5 class="card-title text-center">Calidad</h5>
                <p class="card-text text-justify">
                        Realizando cada actividad bien desde el principio, continuamente aprendiendo, desarrollando y mejorando,
                        estando orgullosos de nuestro trabajo.
                </p>
                
              </div>
            </div>

          </div>

          <div class="card-group">

                <div class="card">
                  {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                  <div class="card-body">
                    <h5 class="card-title text-center">Respeto</h5>
                    <p class="card-text text-justify">
                        De los intereses de las personas que están en contacto con nuestra compañía, clientes, proveedores, colaboradores y comunidad.
                    </p>
                    
                  </div>
                </div>

                <div class="card">
                  {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                  <div class="card-body">
                    <h5 class="card-title text-center">Integridad</h5>
                    <p class="card-text text-justify">
                        Con los más altos estándares de honestidad, ética profesional y moral.
                    </p>
                    
                  </div>
                </div>

                <div class="card">
                  {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                  <div class="card-body">
                    <h5 class="card-title text-center">Excelencia</h5>
                    <p class="card-text text-justify">
                        Utilizando tecnología de punta alcanzando calidad en nuestros productos y
                        buscando una mejora constante para convertirnos en los mejores del ramo.
                    </p>
                    
                  </div>
                </div>

              </div>
    @endsection