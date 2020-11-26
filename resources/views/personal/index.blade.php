<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.css"/>

    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.22/datatables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Despacho</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Incio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Ayuda</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Funciones
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Licencias</a>
                    <a class="dropdown-item" href="#">Partes</a>
                    <div class="dropdown-divider"></div>
                </div>
            </li>

        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
        </form>
    </div>
</nav>
<div class="container">
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Personal</a>
            <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Nuevo Personal</a>

        </div>
    </nav>
        <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <h1>personal</h1>
                    <table id="tablaPersonal" class="table table-hover">
                        <thead>
                            <td>LP</td>
                            <td>DNI</td>
                            <td>NOMBRE</td>
                            <td>APELLIDO</td>
                            <td>DOMICILIO</td>
                            <td>PROVINCIA</td>
                            <td>TELEFONO</td>
                            <td>FECHA ALTA</td>
                            <td>ACCIONES</td>
                        </thead>
                    </table>




                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <h1>Nuevo Personal</h1>

                    <form id="registro-personal">
                        @csrf
                        <div class="form-row">
                            <div class="col">
                                <input type="number" class="form-control" id="txtlp" name="txtlp" placeholder="Legajo Personal">
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" id="txtdni" name="txtdni"placeholder="DNI">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" id="txtnombre" name="txtnombre"placeholder="Nombre">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" id="txtapellido" name="txtapellido"placeholder="Apellido">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Otros Datos</label>
                            <input type="text" class="form-control" id="txtdomicilio" name="txtdomicilio" placeholder="Direccion">
                        </div>
                        <div class="form-group">

                            <input type="text" class="form-control" id="txtprovincia" name="txtprovincia" placeholder="Provincia">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">

                                <input type="number" class="form-control" id="txttelefono" name="txttelefono" placeholder="Telefono">
                            </div>

                            <div class="form-group col-md-2">

                                <input type="date" class="form-control" id="txtfecha" name="txtfecha">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary" >Alta</button>
                    </form>



                </div>

        </div>

    <!-- Modal Editaar -->


    <!-- Modal -->
    <div class="modal fade" id="personal_edit_modal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Editar Personal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="personal-edit">
                <div class="modal-body">


                        @csrf
                        <div class="form-row">
                            <div class="col">
                                <input type="number" class="form-control" id="txtlp2" name="txtlp2" placeholder="Legajo Personal">
                            </div>
                            <div class="col">
                                <input type="number" class="form-control" id="txtdni2" name="txtdni2"placeholder="DNI">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" id="txtnombre2" name="txtnombre2"placeholder="Nombre">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" id="txtapellido2" name="txtapellido2"placeholder="Apellido">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Otros Datos</label>
                            <input type="text" class="form-control" id="txtdomicilio2" name="txtdomicilio2" placeholder="Direccion">
                        </div>
                        <div class="form-group">

                            <input type="text" class="form-control" id="txtprovincia2" name="txtprovincia2" placeholder="Provincia">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">

                                <input type="number" class="form-control" id="txttelefono2" name="txttelefono2" placeholder="Telefono">
                            </div>

                            <div class="form-group col-md-2">

                                <input type="date" class="form-control" id="txtfecha2" name="txtfecha2">
                            </div>
                        </div>




                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
                    <button type="submit" class="btn btn-primary">actualizar</button>
                </div>
                </form>
            </div>
        </div>
    </div>





    <!-- Modal Eliminaar-->

    <div class="modal fade" id="confirModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Confirmacion</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ¿Desea Eliminar el Registro Seleccionado?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" id="btnEliminar" name="btnEliminar" class="btn btn-danger">Eliminar</button>
                </div>
            </div>
        </div>
    </div>



</div>
    <script>
            $(document).ready(function (){
                var tablaPersonal=$('#tablaPersonal').DataTable({
                    processing:true,
                    serverSide:true,
                    ajax:{
                        url:"{{route('personal.index')}}",
                    },
                    columns:[
                        {data:'pe_lp'},
                        {data:'pe_dni'},
                        {data:'pe_nombre'},
                        {data:'pe_apellido'},
                        {data:'pe_domicilio'},
                        {data:'pe_provincia'},
                        {data:'pe_telefono'},
                        {data:'pe_fecha_alta'},
                        {data:'action', orderable: false}

                    ]

                });
            });

    </script>





    <script>
        $('#registro-personal').submit(function (e){
           e.preventDefault();

           var lp = $('#txtlp').val();
            var dni = $('#txtdni').val();
            var nombre = $('#txtnombre').val();
            var apellido = $('#txtapellido').val();
            var domicilio = $('#txtdomicilio').val();
            var provincia = $('#txtprovincia').val();
            var telefono = $('#txttelefono').val();
            var fecha = $('#txtfecha').val();
            var _token =$("input[name=_token]").val();

            $.ajax({
                url:"{{route('personal.registrar')}}",
                type: "POST",
                data:{
                        lp:lp,
                        dni:dni,
                        nombre:nombre,
                        apellido:apellido,
                        domicilio:domicilio,
                        provincia:provincia,
                        telefono:telefono,
                        fecha:fecha,
                        _token:_token
                },
                success:function (response){
                    if(response){
                        $('#registro-personal')[0].reset();
                        toastr.success('el registro se registro correctamente. ','nuevo registro',{timeOut:3000});
                        $('#tablaPersonal').DataTable().ajax.reload();
                    }



                }
            });


        });


    </script>

    <script>
        //Eliminar personal
            var per_lp;

            $(document).on('click', '.delete',function (){
                per_lp=$(this).attr('pe_lp');

                $('#confirModal').modal('show');

            });

            $('#btnEliminar').click(function (){
               $.ajax({
                   url:"personal/eliminar/"+per_lp,
                   beforeSend:function () {
                       $('#btnEliminar').text('Eliminando...');
                   },
                   success:function (data){
                       setTimeout(function (){
                                            $('#confirModal').modal('hide');
                           toastr.warning('el registro se elimino correcatamente. ','eliminar  registro',{timeOut:3000});
                           $('#tablaPersonal').DataTable().ajax.reload();
                                            },2000);
                       $('#btnEliminar').text('Eliminar');
                   }


               });

            });


    </script>


    <script>
        function editarPersonal(lp){
            $.get('personal/editar/'+lp, function (personal){
                 //asignar datos a modal
                $('#txtlp2').val(personal[0].lp);
                $('#txtnombre2').val(personal[0].nombre);



                $('#personal_edit_modal').modal('toggle');

            })



        }


    </script>


</body>
</html>
