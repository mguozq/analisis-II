<div class="content-wrapper">

  <section class="content-header">
    <h1>
      <span class="fa fa-file"></span>
      EJEMPLOS
      <small>Administracion de clientes</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active ">Ejemplos</li>
    </ol>
  </section>
  <section class="content">






    <!-- ======================================== caja o formulario =========================== -->
    <div class="box box-primary">

      <!-- encabezado -->
      <div class="box-header with-border">
        <h4 class="box-title">Titulo (caja o formulario normal)</h4>
      </div>

      <!-- cuerpo o contenido -->
      <div class="box-body">

        <!-- caja de texto normal -->
        <div class="form-group ">
          <div class="input-group">
            <span class="input-group-addon"> <i class="fa fa-home"></i> </span>
            <input type="text" class="form-control input-sm" placeholder="Soy una caja de texto normal">
          </div>
        </div>

        <!-- selector -->
        <div class="form-group">
          <div class="input-group">
            <span class="input-group-addon"> <i class="fa fa-th-list"></i> </span>
            <select class="form-control input-sm select2" style="width: 100%" required>
              <option value="">Soy un selector</option>
              <option value="">Soy una opcion</option>
              <option value="">Soy otra opcion</option>
            </select>
          </div>
        </div>

        <!-- cajas de texto en fila -->
        <div class="row">

          <div class="form-group col-lg-4">
            <div class="input-group">
              <span class="input-group-addon"> <i class="fa fa-home"></i> </span>
              <input type="text" class="form-control input-sm" placeholder="Soy una caja de texto en fila">
            </div>
          </div>


          <div class="form-group col-lg-4">
            <div class="input-group">
              <span class="input-group-addon"> <i class="fa fa-home"></i> </span>
              <input type="text" class="form-control input-sm" placeholder="Soy otra caja de texto en fila">
            </div>
          </div>

          <div class="form-group col-lg-4">
            <div class="input-group">
              <span class="input-group-addon"> <i class="fa fa-th-list"></i> </span>
              <select class="form-control input-sm select2" style="width: 100%" required>
                <option value="">Soy un selector en fila</option>
                <option value="">Soy una opcion</option>
                <option value="">Soy otra opcion</option>
              </select>
            </div>
          </div>

        </div>
        <!-- fin de cajas en fila -->

      </div>

      <!-- pie -->
      <div class="box-footer">
        <button type="button" class="btn btn-primary pull-right">Boton a la derecha</button>
        <button type="button" class="btn btn-default pull-left">Boton a la izquierda</button>
      </div>

    </div>
<!-- ======================================== fin caja o formulario =========================== -->
















          <!-- ======================================== caja de texto estrecho y centrado ================================== -->

    <div class="pull-center">
      <div class="col-lg-7">

        <div class="box box-primary">

          <!-- encabezado -->
          <div class="box-header with-border">
            <h4 class="box-title">Titulo (caja o formulario estrecho y centrado)</h4>
          </div>

          <!-- cuerpo o contenido -->
          <div class="box-body">

            <!-- caja de texto normal -->
            <div class="form-group ">
              <div class="input-group">
                <span class="input-group-addon"> <i class="fa fa-home"></i> </span>
                <input type="text" class="form-control input-sm" placeholder="Soy una caja de texto normal">
              </div>
            </div>

            <!-- selector -->
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"> <i class="fa fa-th-list"></i> </span>
                <select class="form-control input-sm select2" style="width: 100%" required>
                  <option value="">Soy un selector</option>
                  <option value="">Soy una opcion</option>
                  <option value="">Soy otra opcion</option>
                </select>
              </div>
            </div>

            <!-- cajas de texto en fila -->
            <div class="row">

              <div class="form-group col-lg-4">
                <div class="input-group">
                  <span class="input-group-addon"> <i class="fa fa-home"></i> </span>
                  <input type="text" class="form-control input-sm" placeholder="Soy una caja de texto en fila">
                </div>
              </div>


              <div class="form-group col-lg-4">
                <div class="input-group">
                  <span class="input-group-addon"> <i class="fa fa-home"></i> </span>
                  <input type="text" class="form-control input-sm" placeholder="Soy otra caja de texto en fila">
                </div>
              </div>

              <div class="form-group col-lg-4">
                <div class="input-group">
                  <span class="input-group-addon"> <i class="fa fa-th-list"></i> </span>
                  <select class="form-control input-sm select2" required>
                    <option value="">Soy un selector en fila</option>
                    <option value="">Soy una opcion</option>
                    <option value="">Soy otra opcion</option>
                  </select>
                </div>
              </div>

            </div>
            <!-- fin de cajas en fila -->

          </div>

          <!-- pie -->
          <div class="box-footer">
            <button type="button" class="btn btn-primary pull-right">Boton a la derecha</button>
            <button type="button" class="btn btn-default pull-left">Boton a la izquierda</button>
          </div>

        </div>

      </div>
    </div>

<!-- ========================================  fin caja de texto estrecho y centrado ================================== -->












      <!-- ===================================== tabla ============================= -->
      <div class="box">
        <div class="box-header with-border">
          <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarProducto">
            soy un boton en una tabla
          </button>
        </div>

        <div class="box-body">
          <table class="table table-bordered table-striped dt-responsive data-tables Cfont13" width="100%">
            <!-- encabezado de tabla -->
            <thead>
              <tr>
                <th style="width:10px">#</th>
                <th>Imagen</th>
                <th>item 1</th>
                <th>item 2</th>
                <th>item 3</th>
                <th>botones</th>
              </tr>
            </thead>
            <!-- cuerpo de la tabla  -->
            <tbody>
              <tr>
                <td>1</td>
                <td><img src="system/vistas/img/plantilla/moto.png" class="img-circle" width="65px"></td>
                <td>dato 1</td>
                <td>dato 2</td>
                <td>dato 3</td>
                <td>
                  <div class="btn-group">
                    <button class="btn btn-warning"> <i class="fa fa-pencil"></i> </button>
                    <button class="btn btn-danger"> <i class="fa fa-times"></i> </button>
                  </div>
                </td>
              </tr>

              <tr>
                <td>1</td>
                <td><img src="system/vistas/img/plantilla/user.png" class="img-circle" width="65px"></td>
                <td>Otro dato 1</td>
                <td>Otro dato 2</td>
                <td>Otro dato 3</td>
                <td>
                  <div class="btn-group">
                    <button class="btn btn-warning"> <i class="fa fa-pencil"></i> </button>
                    <button class="btn btn-danger"> <i class="fa fa-times"></i> </button>
                  </div>
                </td>
              </tr>
            </tbody>


          </table>
        </div>

      </div>


<!-- ================================== fin de tabla ======================================== -->


      <div class="box box-success">
        <div class="box box-header">
          <h4 class="box-title"> Botones </h4>
        </div>
        <div class="box-body">

          <button type="button" class="btn btn-success">Soy un boton normal</button>

          <a href="inicio"><button type="button" class="btn btn-danger">Soy un boton con link</button></a>

          <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modal-ejemplo">Soy un boton modal</button>

        </div>

      </div>






  </section>
</div>












                  <!-- =============================== modal o ventana emergente ===================== -->

<div id="modal-ejemplo" class="modal fade" role="dialog">
 <div class="modal-dialog">
   <div class="modal-content border-circle">
      <form role="form" method="post">

        <!-- Encabezado del modal-->
          <div class="modal-header">
            <h4 class="modal-title"><i class="fa fa-plus"></i> Hola prro soy un modal</h4>
          </div>
      <!-- Cuerpo del modal-->
          <div class="modal-body">
            <div class="box-body">

                                        <!--======Campo para el nombre======-->
              <div class="form-group ">
                <div class="input-group">
                  <span class="input-group-addon"> <i class="fa fa-user"></i> </span>
                  <input type="text" class="form-control input-sm"  placeholder="Soy una caja de texto en un modal" required>
                </div>
              </div>


            </div>
          </div>
      <!-- Pie de pagina del modal-->
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left btn-circle" data-dismiss="modal"><i class="fa fa-remove"></i> Cancelar</button>
            <button type="button" class="btn btn-primary btn-circle"><i class="fa fa-check"></i> Guardar</button>
          </div>

      </form>

    </div>
  </div>
</div>
              <!-- =============================== fin modal o ventana emergente ===================== -->
