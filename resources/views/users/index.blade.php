@extends('layouts.app')

@section('content')
    <body>
        <!--encabezado titulo-->
        <section class="sectionTitulo">
            <div class="divTitulo col-md-4 text-md-end bg-red p-3 w-50 text-light">
              <h1>Genera tu certificado</h1>
            </div>
        </section>
        <!--Generar certificado-->
        
        <section class="container mt-5 w-50">
            <div class="card">
                <div class="card-header">
                    El certificado contendrá su nombre y documento de identidad. En caso de requerir algún dato adicional, seleccione a continuación.
                </div>

                <div class="card-body">
                    <form method="post" action="Docente.php">

                        <div class="row mb-4 mt-3">

                            <div class="form-check">
                                        <input class="form-check-input" type="checkbox" id="salario">
                                        <label class="form-check-label ms-3" for="salario">Salario</label>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="form-check">  
                                <input class="form-check-input" type="checkbox" id="tipoContrato">
                                <label for="form-check-label ms-5">Tipo de Contrato</label>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="fechaIngreso">
                                <label for="form-check-label ms-5">Fecha de Ingreso</label>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-8 offset-md-5">
                                <button class="btn btn-blue w-25" type="submit" id="btn-abrir-modal">Generar</button>
                                <!--Confirmación de fecha de documento antes de descargar el certificado por seguridad-->
                                <dialog id="modal" class="descargar">
                                    <h2>Para continuar, valida la fecha de expedición de tu documento.</h2>
                                    <form>
                                    <input type="date" class="date">
                                    <button class="continue1" type="submit" value="Generate PDF">Continuar</button>
                                    </form>
                                <button id="btn-cerrar-modal" class="cancel1"><a href="">Cerrar</a></button>
                                </dialog>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </body>
@endsection