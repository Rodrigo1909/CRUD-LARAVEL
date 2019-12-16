<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Tarea</title>

        <!-- Fonts -->
        @if(!isset($pdf) || !$pdf)
            <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        @endif

        <!-- Styles -->
        <style>
            html, body {
                background-color: #c0f3f6;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                flex-direction: column;
                justify-content: center;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .title {
                font-size: 100px;
            }

            .container {
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .tr-head {
                border-top: solid 1px #444;
            }

            .cell-head {
                border-top: solid 1px #444;
                border-right: solid 1px #444;
                font-weight: bold;
                margin: 0;
                min-width: 200px;
                font-size: 20px;
                background-color: #19a0a6;
                font-weight: bold;
                color: #020200;
            }

            .cell-head:nth-child(1) {
                border-left: solid 1px #444;
            }

            .cell {
                border-right: solid 1px #444;
                border-bottom: solid 1px #444;
                font-weight: lighter;
                background-color: #fff;
            }

            .cell:nth-child(1) {
                border-left: solid 1px #444;
            }

            .acciones {
                text-align: right;
                margin-bottom: 20px;
            }

            a {
                text-decoration: none;
            }

            button {
                outline: 0;
                background-color: #55aed6;
                color: white;
                padding: 7px 13px;
                border-radius: 6px;
            }
            buttonEliminar {
                outline: 0;
                background-color: #d56d28;
                color: white;
                padding: 5px 7px;
                border-radius: 6px;
            }

            buttonReporte {
                outline: 0;
                background-color: #d2c500;
                color: white;
                padding: 7px 10px;
                border-radius: 6px;
            }
            buttonNuevo {
                outline: 0;
                background-color: #02a800;
                color: white;
                padding: 7px 10px;
                border-radius: 6px;
            }
        </style>
    </head>
    <script>
        function confimar( url ) {
            if (confirm("¿Estas seguro de borrar el registro?")) {
            document.location = url;
            }
        }
    </script>

    <body>
        <div class="container full-height">
            <div class="content">
                <div class="acciones">
                    <a href="/nuevo">
                        <buttonNuevo>Nuevo</buttonNuevo>
                    </a>

                    <a href="/pdf" download="Reporte.pdf">
                        <buttonReporte>Reporte General</buttonReporte>
                    </a>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th class="cell-head">Nombre</th>
                            <th class="cell-head">Apellido Paterno</th>
                            <th class="cell-head">Apellido Materno</th>
                            <th class="cell-head">Edad</th>
                            <th class="cell-head">Télefono (773)</th>
                            <th class="cell-head">Correo</th>                            
                            <th class="cell-head">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($records as $record)
                            <tr>
                                <th class="cell">{{ $record->nombre }}</th>
                                <th class="cell">{{ $record->apellidoP }}</th>
                                <th class="cell">{{ $record->apellidoM }}</th>
                                <th class="cell">{{ $record->edad }}</th>
                                <th class="cell">{{ $record->telefono }}</th>
                                <th class="cell">{{ $record->correo_electronico }}</th>                                
                                <th class="cell">
                                    <div>
                                        <a href="/editar/{{$record->id}}">
                                            <button>Editar</button>
                                        </a>
                                        <a href="/pdf/{{$record->id}}" download="Reporte.pdf">
                                            <buttonReporte>PDF</buttonReporte>
                                        </a>
                                        <a href="javascript:confimar('/eliminar/{{$record->id}}')">
                                             <buttonEliminar>Eliminar</buttonEliminar>
                                        </a>
                                    </div>
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>
</html>
