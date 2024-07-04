<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Administración de clientes</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="inicio">Inicio</a></li>
                        <li class="breadcrumb-item active">Clientes</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <!-- Button to Open the Modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                    <i class="fas fa-user-plus"></i> Ingresar clientes
                </button>

                <!-- The Modal -->
                <div class="modal" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form action="" method="post">

                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Ingresar clientes</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>

<<<<<<< Updated upstream
                                 <!-- Modal body -->
                                 <div class="modal-body">
                                     <div class="box-body">
                                         <!-- primera fila  -->
                                         <div class="input-group mb-3">
                                             <div class="input-group-prepend">
                                                 <span class="input-group-text"><i class="fas fa-fingerprint"></i></span>
                                             </div>
                                             <input type="text" name="cedula_guardar" id="cedula_guardar" maxlength="10" placeholder="Ingrese la cédula de indentidad" required class="form-control">
                                         </div>
                                         <!-- segunda fila -->
                                         <div class="input-group mb-3">
                                             <div class="input-group-prepend">
                                                 <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                                             </div>
                                             <input type="text" name="nombre_guardar" id="nombre_guardar" placeholder="Nombres del cliente" class="form-control" required>

                                             <div class="input-group-prepend">
                                                 <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                                             </div>
                                             <input type="text" name="apellido_guardar" id="apellido_guardar" placeholder="Apellidos del cliente" class="form-control" required>
                                         </div>
                                         <!-- tercera fila -->
                                         <div class="input-group mb-3">
                                             <div class="input-group-prepend">
                                                 <span class="input-group-text"><i class="fas fa-restroom"></i></span>
                                             </div>
                                             <select name="sexo_guardar" id="sexo_guardar" class="form-control" required>
                                                 <option value="0">Seleccione el sexo</option>
                                                 <option value="Hombre">Hombre</option>
                                                 <option value="Mujer">Mujer</option>
                                             </select>

                                             <div class="input-group-prepend">
                                                 <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                             </div>
                                             <input type="date" name="f_nacimiento_guardar" id="f_nacimiento_guardar" class="form-control sm-form-contro" required>
                                         </div>
                                         <!-- cuarta fila -->
                                         <div class="input-group mb-3">
                                             <div class="input-group-prepend">
                                                 <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                             </div>
                                             <input type="email" name="correo_guardar" id="correo_guardar" class="form-control" placeholder="Ingrese el correo">

                                             <div class="input-group-prepend">
                                                 <span class="input-group-text"><i class="fas fa-phone-square"></i></span>
                                             </div>
                                             <input type="text" name="telefono_guardar" id="telefono_guardar" class="form-control" placeholder="Ingre el teléfono" required>
                                         </div>
                                         <!-- quita fila -->
                                         <div class="input-group mb-3">
                                             <div class="input-group-prepend">
                                                 <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                             </div>
                                             <input type="text" name="direccion_guardar" id="direccion_guardar" class="form-control" placeholder="Ingrese la dirección">
                                         </div>
                                     </div>

                                     <!-- Modal footer -->
                                     <div class="modal-footer">
                                         <button type="submit" class="btn btn-primary">Guardar</button>
                                         <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                     </div>
                                     <?php
                                        $objCliente = new controladorClientes;
                                        $objCliente->ctrlGuardarClientes();
                                        ?>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="card-body">
                <?php
                $objCliente->ctrlCargarClientes();
                ?>
                 <table id="example1" class="table table-bordered table-striped">
                     <thead>
                         <tr>
                             <th>Id</th>
                             <th>Cédula</th>
                             <th>Nombres</th>
                             <th>Apellidos</th>
                             <th>Dirección</th>
                             <th>Sexo</th>
                             <th>Correo</th>
                             <th>Teléfono</th>
                             <th>F Nacimiento</th>
                             <th>Acciones</th>
                         </tr>
                     </thead>
                     <tbody>
                         <tr>
                             <td>Trident</td>
                             <td>Internet
                                 Explorer 4.0
                             </td>
                             <td>Win 95+</td>
                             <td> 4</td>
                             <td>X</td>
                         </tr>
                         <tr>
                             <td>Trident</td>
                             <td>Internet
                                 Explorer 5.0
                             </td>
                             <td>Win 95+</td>
                             <td>5</td>
                             <td>C</td>
                         </tr>
                         <tr>
                             <td>Trident</td>
                             <td>Internet
                                 Explorer 5.5
                             </td>
                             <td>Win 95+</td>
                             <td>5.5</td>
                             <td>A</td>
                         </tr>
                        
                
                     </tbody>
                     <tfoot>
                         <tr>
                             <th>Id</th>
                             <th>Cédula</th>
                             <th>Nombres</th>
                             <th>Apellidos</th>
                             <th>Dirección</th>
                             <th>Sexo</th>
                             <th>Correo</th>
                             <th>Teléfono</th>
                             <th>F Nacimiento</th>
                             <th>Acciones</th>
                         </tr>
                     </tfoot>
                 </table>
             </div>
             <!-- /.card-body -->
         </div>
         <!-- /.card -->

     </section>
     <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->
=======
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <div class="box-body">
                                        <!-- primera fila  -->
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-fingerprint"></i></span>
                                            </div>
                                            <input type="text" name="cedula_guardar" id="cedula_guardar" maxlength="10" placeholder="Ingrese la cédula de identidad" required class="form-control">
                                        </div>
                                        <!-- segunda fila -->
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                                            </div>
                                            <input type="text" name="nombre_guardar" id="nombre_guardar" placeholder="Nombres del cliente" class="form-control" required>

                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-user-tie"></i></span>
                                            </div>
                                            <input type="text" name="apellido_guardar" id="apellido_guardar" placeholder="Apellidos del cliente" class="form-control" required>
                                        </div>
                                        <!-- tercera fila -->
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-restroom"></i></span>
                                            </div>
                                            <select name="sexo_guardar" id="sexo_guardar" class="form-control" required>
                                                <option value="0">Seleccione el sexo</option>
                                                <option value="Hombre">Hombre</option>
                                                <option value="Mujer">Mujer</option>
                                            </select>

                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
                                            </div>
                                            <input type="date" name="f_nacimiento_guardar" id="f_nacimiento_guardar" class="form-control sm-form-contro" required>
                                        </div>
                                        <!-- cuarta fila -->
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                            </div>
                                            <input type="email" name="correo_guardar" id="correo_guardar" class="form-control" placeholder="Ingrese el correo">

                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-phone-square"></i></span>
                                            </div>
                                            <input type="text" name="telefono_guardar" id="telefono_guardar" class="form-control" placeholder="Ingrese el teléfono" required>
                                        </div>
                                        <!-- quita fila -->
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                            </div>
                                            <input type="text" name="direccion_guardar" id="direccion_guardar" class="form-control" placeholder="Ingrese la dirección">
                                        </div>
                                    </div>
                                </div>

                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                </div>
                                <?php
                                $objCliente = new controladorClientes;
                                $objCliente->ctrlGuardarClientes();
                                ?>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">

                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Cedula</th>
                            <th>Nombres y Apellidos</th>
                            <th>Direccion</th>
                            <th>Sexo</th>
                            <th>Correo</th>
                            <th>Telefono</th>
                            <th>F Nacimiento</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $clientes = controladorClientes::ctrlCargarClientes();
                        foreach ($clientes as $cliente => $value) {
                            echo '
                            <tr>
                                <td>' . $value["id_clientes"] . '</td>
                                <td>' . $value["cedula"] . '</td>
                                <td>' . $value["nombres"] . ' ' . $value["apellidos"] . '</td>
                                <td>' . $value["direccion"] . '</td>
                                <td>' . $value["sexo"] . '</td>
                                <td>' . $value["correo"] . '</td>
                                <td>' . $value["telefono"] . '</td>
                                <td>' . $value["f_nacimiento"] . '</td>
                                <td>
                                    <button class="btn btn-warning btn-sm">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </td>
                            </tr>';
                        } ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Cedula</th>
                            <th>Nombres</th>
                            <th>Direccion</th>
                            <th>Sexo</th>
                            <th>Correo</th>
                            <th>Telefono</th>
                            <th>F Nacimiento</th>
                            <th>Acciones</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
>>>>>>> Stashed changes
