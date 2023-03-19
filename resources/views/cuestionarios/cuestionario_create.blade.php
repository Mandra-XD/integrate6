@extends('layouts.app')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Háblame de ti. ...</h3>
        </div>
        <div class="container">
            <header>Registrar Cliente</header>
            <div class="d-flex flex-row progress-bar">
                <div class="step">
                    <p>Paso 1</p>
                    <div class="bullet">
                        <span>1</span>
                    </div>
                    <div class="check fas fa-check"></div>
                </div>
                <div class="step">
                    <p>Paso 2</p>
                    <div class="bullet">
                        <span>2</span>
                    </div>
                    <div class="check fas fa-check"></div>
                </div>
                <div class="step">
                    <p>Paso 3</p>
                    <div class="bullet">
                        <span>3</span>
                    </div>
                    <div class="check fas fa-check"></div>
                </div>
                <div class="step">
                    <p>Fin</p>
                    <div class="bullet">
                        <span>4</span>
                    </div>
                    <div class="check fas fa-check"></div>
                </div>
            </div>


            <div class="form-outer">
                <form action="#">
                    <div class="page slide-page">
                        <div class="field">
                            <div class="label">Nombre Completo</div>
                            <input type="text">
                        </div>
                        <div class="field">
                            <div class="label">Apellidos</div>
                            <input type="text">
                        </div>
                        <div class="field">
                            <button class="firstNext next">Siguiente</button>
                        </div>
                    </div>

                    <div class="page">
                        <div class="title">Información de Contacto</div>
                        <div class="field">
                            <div class="label">Correo Electronico</div>
                            <input type="text">
                        </div>
                        <div class="field">
                            <div class="label">Número de Telefono</div>
                            <input type="Number">
                        </div>
                        <div class="field btns">
                            <button class="prev-1 prev">Atrás</button>
                            <button class="next-1 next">Siguiente</button>
                        </div>
                    </div>

                    <div class="page">
                        <div class="field">
                            <div class="label">Fecha de Nacimiento</div>
                            <input type="datetime-local">
                        </div>
                        <div class="field">
                            <div class="label">Genero</div>
                            <select>
                                <option>Masculino</option>
                                <option>Femenino</option>
                            </select>
                        </div>
                        <div class="field btns">
                            <button class="prev-2 prev">Atrás</button>
                            <button class="next-2 next">Siguiente</button>
                        </div>
                    </div>

                    <div class="page">
                        <div class="title">Datos de Login</div>
                        <div class="field">
                            <div class="label">Usuario</div>
                            <input type="text">
                        </div>
                        <div class="field">
                            <div class="label">Clave</div>
                            <input type="password">
                        </div>
                        <div class="field btns">
                            <button class="prev-3 prev">Atrás</button>
                            <button class="submit">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
