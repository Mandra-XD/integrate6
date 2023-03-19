@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Dashboard</h3>
        </div>
        <div class="container-fluid px-2 px-md-4">
            <div class="page-header min-height-300 border-radius-xl mt-4"
                style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
                <span class="mask  bg-gradient-primary  opacity-6"></span>
            </div>
            <div class="card card-body mx-3 mx-md-4 mt-n6">
                <div class="row gx-4 mb-2">
                    <div class="col-auto">

                    </div>
                    <div class="col-auto my-auto">

                    </div>

                </div>
                <div class="card card-plain h-100">
                    <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-md-8 d-flex align-items-center">
                                <h6 class="mb-3">Nuevo perfil</h6>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3">
                        @if (session('status'))
                            <div class="row">
                                <div class="alert alert-success alert-dismissible text-white" role="alert">
                                    <span class="text-sm">{{ Session::get('status') }}</span>
                                    <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        @endif
                        @if (Session::has('demo'))
                            <div class="row">
                                <div class="alert alert-danger alert-dismissible text-white" role="alert">
                                    <span class="text-sm">{{ Session::get('demo') }}</span>
                                    <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert"
                                        aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        @endif
                        <form method='POST' action="{{ route('vacante.store') }}">
                            @csrf
                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Reclutador</label>
                                    <select class="form-select" id="user_id" name="user_id"
                                        aria-label="Disabled select example" disabled>
                                        <option value="{{ auth()->user()->id }}" selected>{{ auth()->user()->name }}
                                        </option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Empresa</label>
                                    <input type="text" id="puesto" name="puesto"
                                        class="form-control border border-2 p-2" value="{{ auth()->user()->empresa }}"
                                        disabled>

                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Puesto de trabajo</label>
                                    <input type="text" id="puesto" name="puesto"
                                        class="form-control border border-2 p-2">

                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Lugar</label>
                                    <input type="text" id="lugar" name="lugar"
                                        class="form-control border border-2 p-2">

                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Salario</label>
                                    <input type="text" id="salario" name="salario"
                                        class="form-control border border-2 p-2">

                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Tipo de Empleo</label>
                                    <select class="form-select" id="tipo_empleo" name="tipo_empleo"
                                        aria-label=" select example" >
                                        <option selected>Seleccion una opción...</option>
                                        <option value="1">Tiempo completo</option>
                                        <option value="2">Medio tiempo</option>
                                        <option value="3">Rolar turno</option>
                                    </select>
                                </div>
                                <div class="mb-3 col-md-6">
                                    <label class="form-label">Turno</label>
                                    <input type="text" id="turno" name="turno"
                                        class="form-control border border-2 p-2">

                                </div>
                                <div class="mb-3 col-md-12">
                                    <label for="floatingTextarea2">Descripcion</label>
                                    <textarea class="form-control border border-2 p-2" placeholder=" Say something about yourself" id="floatingTextarea2"
                                        id="descripcion" name="descripcion" rows="4" cols="50"></textarea>

                                </div>


                                <div class="mb-3 col-md-12">
                                    <label for="floatingTextarea2">experiencia</label>
                                    <textarea class="form-control border border-2 p-2" placeholder=" Say something about yourself" id="floatingTextarea2"
                                        id="experiencia" name="experiencia" rows="4" cols="50"></textarea>

                                </div>
                            </div>
                            <button class="btn bg-gradient-dark"><a href="puesto-index">Cancelar</a></button>
                            <button type="submit" class="btn bg-gradient-dark">Crear Perfil</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        </div>
        </div>
    </section>
@endsection
