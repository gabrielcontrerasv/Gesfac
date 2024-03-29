@extends('layouts.layouts')

@section('title')
    <title>REGISTRAR ALUMNO</title>
@endsection

@section('page_content')
    <h2 class="title_page">REGISTRAR ALUMNO</h2>

    @if($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger col-12" role="alert">
                {{ $error }}
            </div>
        @endforeach
    @endif

    @if(Session::get('failures'))
        @foreach (Session::get('failures') as $failure)
            <div class="alert alert-danger col-12" role="alert">
                {{ "Hubo un error en la fila ".$failure->row().", ".$failure->errors()[0] }}
            </div>
        @endforeach
    @endisset

    {!! Form::open(['url' => 'registrar_alumno']) !!}


    <div class="row">

        <div class="form-group col-12 col-lg-6">
            {{ Form::label("tipo_documento", "Tipo documento", ['class' => 'control-label']) }}
            {{Form::select('tipo_documento', $tipo_documentos, null, array('class'=>'form-control', 'required', 'placeholder'=>'Seleccionar ...'))}}
        </div>

        <div class="form-group col-12 col-lg-6">
            {{ Form::label("numero_documento", "Número", ['class' => 'control-label']) }}
            {{ Form::text("numero_documento", null, array_merge(['class' => 'form-control', 'required',], [])) }}
        </div>

    </div>

    <div class="row">

        <div class="form-group col-12 col-lg-6">
            {{ Form::label("nombre", "Nombre", ['class' => 'control-label']) }}
            {{ Form::text("nombre", null, array_merge(['class' => 'form-control', 'required'], [])) }}
        </div>

        <div class="form-group col-12 col-lg-6">
            {{ Form::label("telefono", "Teléfono", ['class' => 'control-label']) }}
            {{ Form::text("telefono", null, array_merge(['class' => 'form-control', 'required'], [])) }}
        </div>
    </div>

    <div class="row">

        <div class="form-group col-12 col-lg-6">
            {{ Form::label("direccion", "Dirección", ['class' => 'control-label']) }}
            {{ Form::text("direccion", null, array_merge(['class' => 'form-control', 'required'], [])) }}
        </div>

        <div class="form-group col-12 col-lg-6">
            {{ Form::label("correo", "Correo", ['class' => 'control-label']) }}
            {{ Form::email("correo", null, array_merge(['class' => 'form-control', 'required'], [])) }}
        </div>
    </div>

    <div class="row">

        <div class="form-group col-12 col-lg-6">
            {{ Form::label("escuadron", "Escuadron", ['class' => 'control-label']) }}
            {{Form::select('escuadron', $escuadrones, null, array('class'=>'form-control', 'required', 'placeholder'=>'Seleccionar ...'))}}
        </div>

    </div>

    <div class="row">
        <div class="form-group col-12 col-lg-6 custom-form-group">
            {{ Form::checkbox("madre", "madre", false, array_merge(['class' => 'big-checkbox', 'id' => 'madre'], [])) }}
            {{ Form::label("madre", "Agregar información de la Madre", ['class' => 'control-label']) }}
        </div>

        <div class="form-group col-12 col-lg-6 custom-form-group">
            {{ Form::checkbox("padre", "padre", false, array_merge(['class' => 'big-checkbox', 'id' => 'padre'], [])) }}
            {{ Form::label("padre", "Agregar información del Padre", ['class' => 'control-label']) }}
        </div>
    </div>

    <div id="mother_registration" class="hidden">

        <h2 class="title_page">REGISTRAR MADRE DE ALUMNO</h2>

        <div class="row">

            <div class="form-group col-12 col-lg-6">
                {{ Form::label("tipo_documento_madre", "Tipo documento", ['class' => 'control-label']) }}
                {{Form::select('tipo_documento_madre', $tipo_documentos, null, array('class'=>'form-control madre', 'placeholder'=>'Seleccionar ...'))}}
            </div>

            <div class="form-group col-12 col-lg-6">
                {{ Form::label("numero_documento_madre", "Número", ['class' => 'control-label']) }}
                {{ Form::text("numero_documento_madre", null, array_merge(['class' => 'form-control madre',], [])) }}
            </div>

        </div>

        <div class="row">

            <div class="form-group col-12 col-lg-6">
                {{ Form::label("nombre_madre", "Nombre", ['class' => 'control-label']) }}
                {{ Form::text("nombre_madre", null, array_merge(['class' => 'form-control madre'], [])) }}
            </div>

            <div class="form-group col-12 col-lg-6">
                {{ Form::label("telefono_madre", "Teléfono", ['class' => 'control-label']) }}
                {{ Form::text("telefono_madre", null, array_merge(['class' => 'form-control madre'], [])) }}
            </div>
        </div>

        <div class="row">

            <div class="form-group col-12 col-lg-6">
                {{ Form::label("direccion_madre", "Dirección", ['class' => 'control-label']) }}
                {{ Form::text("direccion_madre", null, array_merge(['class' => 'form-control madre'], [])) }}
            </div>

            <div class="form-group col-12 col-lg-6">
                {{ Form::label("correo_madre", "Correo", ['class' => 'control-label']) }}
                {{ Form::email("correo_madre", null, array_merge(['class' => 'form-control madre'], [])) }}
            </div>
        </div>

        <div class="row">

            <div class="form-group col-12 col-lg-6">
                {{ Form::label("ocupacion_madre", "Ocupación", ['class' => 'control-label']) }}
                {{ Form::text("ocupacion_madre", null, array_merge(['class' => 'form-control madre'], [])) }}
            </div>

        </div>
    </div>

    <div id="father_registration" class="hidden">

        <h2 class="title_page">REGISTRAR PADRE DE ALUMNO</h2>

        <div class="row">

            <div class="form-group col-12 col-lg-6">
                {{ Form::label("tipo_documento_padre", "Tipo documento", ['class' => 'control-label']) }}
                {{Form::select('tipo_documento_padre', $tipo_documentos, null, array('class'=>'form-control padre', 'placeholder'=>'Seleccionar ...'))}}
            </div>

            <div class="form-group col-12 col-lg-6">
                {{ Form::label("numero_documento_padre", "Número", ['class' => 'control-label']) }}
                {{ Form::text("numero_documento_padre", null, array_merge(['class' => 'form-control padre',], [])) }}
            </div>

        </div>

        <div class="row">

            <div class="form-group col-12 col-lg-6">
                {{ Form::label("nombre_padre", "Nombre", ['class' => 'control-label']) }}
                {{ Form::text("nombre_padre", null, array_merge(['class' => 'form-control padre'], [])) }}
            </div>

            <div class="form-group col-12 col-lg-6">
                {{ Form::label("telefono_padre", "Teléfono", ['class' => 'control-label']) }}
                {{ Form::text("telefono_padre", null, array_merge(['class' => 'form-control padre'], [])) }}
            </div>
        </div>

        <div class="row">

            <div class="form-group col-12 col-lg-6">
                {{ Form::label("direccion_padre", "Dirección", ['class' => 'control-label']) }}
                {{ Form::text("direccion_padre", null, array_merge(['class' => 'form-control padre'], [])) }}
            </div>

            <div class="form-group col-12 col-lg-6">
                {{ Form::label("correo_padre", "Correo", ['class' => 'control-label']) }}
                {{ Form::email("correo_padre", null, array_merge(['class' => 'form-control padre'], [])) }}
            </div>
        </div>

        <div class="row">

            <div class="form-group col-12 col-lg-6">
                {{ Form::label("ocupacion_padre", "Ocupación", ['class' => 'control-label']) }}
                {{ Form::text("ocupacion_padre", null, array_merge(['class' => 'form-control padre'], [])) }}
            </div>

        </div>
    </div>

    <div class="form-group col-8">
        {{ Form::button('Guardar', ['type' => 'submit', 'class' => 'btn btn-success btn-sm'] )  }}
    </div>

    {!! Form::close() !!}

    @if(isset($success)&& $success)
        <div class="form-group col-12 col-md-12">
            <div class="alert alert-success" role="alert">
                Se registro el alumno satisfactoriamente
            </div>
        </div>
    @endif

    @if(isset($success)&& !$success)
        <div class="form-group col-12 col-md-12">
            <div class="alert alert-danger" role="alert">
                Ocurrio un error
            </div>
        </div>
    @endif

    <h2 class="title_page">SUBIR TABLA EXCEL</h2>

    {!! Form::open(['url' => 'import-alumnos', 'files' => true]) !!}


    <div class="row">

        <div class="form-group col-12 col-lg-6 load-file custom-center">
            <a href="{{route("formato_registro_alumnos")}}" target="_blank" class="custom-link">
                {!! Html::decode(Form::label('descargar_excel', '<i class="fas fa-cloud-download-alt fa-2x"></i> Descargar Archivo Base', ['class' => 'subir'])) !!}
            </a>
        </div>

        <div class="form-group col-12 col-lg-6">
            {{ Form::label("excel_escuadron", "Seleccione El Escuadron", ['class' => 'control-label']) }}
            {{Form::select('excel_escuadron', $escuadrones, null, array('class'=>'form-control', 'required', 'placeholder'=>'Seleccionar ...'))}}
        </div>

    </div>

    <div class="row">

        <div class="form-group col-12 col-lg-6 load-file custom-center">
            {!! Html::decode(Form::label('excel', '<i id="load-icon" class="fas fa-cloud-upload-alt fa-2x"></i> Cargar Excel', ['class' => 'subir'])) !!}
            {{ Form::file("excel", array_merge(['class' => 'form-control hidden', 'required'], [])) }}
            <div id="info"></div>
        </div>

        <div class="form-group col-12 col-lg-6 custom-center">
            {{ Form::button('Guardar', ['type' => 'submit', 'class' => 'btn btn-success btn-sm'] )  }}
        </div>
    </div>

    {!! Form::close() !!}

    <script>
        var excel = document.getElementById("excel")
        var load_icon = document.getElementById("load-icon")
        var registrar_madre = document.getElementById("mother_registration");
        var registrar_padre = document.getElementById("father_registration");
        var madre = document.getElementById("madre");
        var padre = document.getElementById("padre");

        madre.addEventListener('click', function() {

            if (this.checked) {
                estado = 1
                add_and_remove_required("madre", true);
                registrar_madre.classList.remove("hidden");
            } else {
                estado = 0
                add_and_remove_required("madre", false);
                registrar_madre.classList.add("hidden");
            }

        })

        padre.addEventListener('click', function() {

            if (this.checked) {
                estado = 1
                add_and_remove_required("padre", true);
                registrar_padre.classList.remove("hidden");

            } else {
                estado = 0
                registrar_padre.classList.add("hidden");
                add_and_remove_required("padre", false);
            }

        })

        function add_and_remove_required(option, value) {

            var  elementos = document.querySelectorAll("."+option);

            for (var i = 0; i < elementos.length; i++) {

                elementos[i].required = value
            }
        }

        excel.addEventListener('change', function() {

            if(excel.value) load_icon.classList.add("color-blue");
            else load_icon.classList.remove("color-blue");

        })

    </script>

@endsection
