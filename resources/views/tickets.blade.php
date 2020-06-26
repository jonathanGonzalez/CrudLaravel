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
                background-color: #fff;
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
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="content">
                <div class="title m-b-md">
                Vista Tickets                
                </div>
                <div>
                    <form method="POST" action="/tickets">
                    @csrf
                        <div>
                            <label for="">Descripción ticket/tarea</label>
                            <input type="text" name="description_text" id="">
                        </div>
                        <div>
                            <label for="">Responsable</label>
                            <input type="text" name="responsable_text" id="">
                        </div>
                        <div>
                            <label for="">Fecha</label>
                            <input type="date" name="fecha_date" id="">
                        </div>
                        <div>
                            <input type="submit" value="Guardar" id="">
                        </div>                        
                    </form>
                </div>

                <div class="links">
                    <table border="1">
                        <thead>
                            <th>
                                id
                            </th>
                            <th>
                                Descripción ticket/tarea
                            </th>
                            <th>
                                Responsable
                            </th>
                            <th>
                                Fecha solicitud
                            </th>
                            <th>
                                created_at
                            </th>
                            <th>
                                updated_at
                            </th>
                            <th>
                            
                            </th>
                        </thead>
                        @foreach($allTickets as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->descripcion }}</td>
                            <td>{{ $item->responsable }}</td>
                            <td>{{ $item->fecha_solicitud }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>{{ $item->updated_at }}</td>
                            <td>
                                <a href="/borrartickets/{{ $item->id }}">borrar</a>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
