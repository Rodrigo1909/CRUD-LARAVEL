<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

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

            .tinytitle {
                font-size: 24px;
            }

            .subtitle {
                font-size: 34px;
            }

            .title {
                font-size: 84px;
            }

            .container {
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 30px;
            }

            form .inputs {
                display: flex;
                flex-direction: column;
                border: white 8px groove;
                background-color: #fff;
            }

            .inputs .row {
                margin-bottom: 10px;
            }

            a {
                text-decoration: none;
            }

            input[type="submit"] {
                outline: 0;
                background-color: #55aed6;
                color: white;
                padding: 10px 10px;
                border-radius: 6px;
                font-weight: bold;                
            }

            .cancelar {
                outline: 0;
                background-color: #d56d28;
                color: white;
                padding: 5px 7px;
                border-radius: 6px;
            }
        </style>
    </head>
    <body>
        <div class="container full-height">
            <div class="content">
            
            <li><a href="../index.php">Regresar</a></li>
                <form method="POST" action="/crear">
                    @csrf
                    @method('POST')

                    <div class="inputs">
                        <h2>Nuevo</h2>

                        <div class="row">
                            <label for="nombre">Nombre:</label>
                            <input
                                required
                                name="nombre"
                                id="nombre"
                                type="text"
                                pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ\s]*$"
                                maxlength="40"
                            />
                        </div>

                        <div class="row">
                            <label for="apellidoP">Apellido Paterno:</label>
                            <input
                                required
                                name="apellidoP"
                                id="apellidoP"
                                type="text"
                                pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ]*$"
                                maxlength="40"
                            />
                        </div>

                        <div class="row">
                            <label for="apellidoM">Apellido Materno:</label>
                            <input
                                required
                                name="apellidoM"
                                id="apellidoM"
                                type="text"
                                pattern="[a-zA-ZñÑáéíóúÁÉÍÓÚ]*$"
                                maxlength="40"
                            />
                        </div>

                        <div class="row">
                            <label for="telefono">Telefono: (773)</label>
                            <input
                                required
                                name="telefono"
                                id="telefono"
                                type="text"
                                pattern="^[0-9]*"
                                maxlength="7"
                            />
                        </div>

                        <div class="row">
                            <label for="edad">Edad: </label>
                            <input
                                required
                                name="edad"
                                id="edad"
                                type="date"
                            />
                        </div>                           

                        <div class="row">
                            <label for="correo_electronico">Correo electrónico:</label>
                            <input
                                required
                                name="correo_electronico"
                                id="correo_electronico"
                                type="email"
                                maxlength="40"
                            />
                        </div>
                    </div>

                     <div class="acciones">
                        <input 
                            type="submit" 
                            value="Crear" 
                            style="background-color: #008f39"/>  
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
