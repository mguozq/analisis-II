<div class="content-wrapper">

  <section class="content-header">
    <h1>
      <span class="fa fa-cart-plus"></span>
      Realizar ventas
      <small>Administracion de ventas</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active ">Sales</li>
    </ol>
  </section>

  <section class="content">

    <div class="row">

      <!--=====================================
      EL FORMULARIO
      ======================================-->

      <div class="col-lg-5 col-xs-12">

        <div class="box box-success">

          <div class="box-header with-border"></div>

          <form role="form" method="post" class="formularioVenta">

            <div class="box-body">

              <div class="box">

                <!--=====================================
                ENTRADA DEL VENDEDOR
                ======================================-->

                <div class="form-group">

                  <div class="input-group">

                    <span class="input-group-addon"><i class="fa fa-user"></i></span>

                    <input type="text" class="form-control" id="nuevoVendedor" value="Ana steffanny" readonly>

                    <input type="hidden" name="idVendedor" value="Ana steffanny">

                  </div>

                </div>

                <!--=====================================
                ENTRADA DEL CÓDIGO
                ======================================-->

                <div class="form-group">

                  <div class="input-group">

                    <span class="input-group-addon"><i class="fa fa-key"></i></span>



                  </div>

                </div>

                <!--=====================================
                ENTRADA DEL CLIENTE
                ======================================-->

                <div class="form-group">

                  <div class="input-group">

                    <span class="input-group-addon"><i class="fa fa-users"></i></span>

                    <select class="form-control" id="seleccionarCliente" name="seleccionarCliente" required>

                    <option value="">Seleccionar cliente</option>
                      <option value="">Juan Carlos Vicente</option>
                      <option value="">Douglas López</option>
                      <option value="">Anyi steffanny</option>
                      <option value="">Edwin Rosales</option>
                      <option value="">Mynor Guoz</option>
                    </select>

                    <span class="input-group-addon"><button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#modalAgregarCliente" data-dismiss="modal">Agregar cliente</button></span>

                  </div>

                </div>

                <!--=====================================
                ENTRADA PARA AGREGAR PRODUCTO
                ======================================-->

                <div class="form-group row nuevoProducto">



                </div>

                <input type="hidden" id="listaProductos" name="listaProductos">

                <!--=====================================
                BOTÓN PARA AGREGAR PRODUCTO
                ======================================-->

                <button type="button" class="btn btn-default hidden-lg btnAgregarProducto">Agregar producto</button>

                <hr>

                <div class="row">

                  <!--=====================================
                  ENTRADA IMPUESTOS Y TOTAL
                  ======================================-->

                  <div class="col-xs-8 pull-right">

                    <table class="table">

                      <thead>

                        <tr>
                          <th>Impuesto</th>
                          <th>Total</th>
                        </tr>

                      </thead>

                      <tbody>

                        <tr>

                          <td style="width: 50%">

                            <div class="input-group">

                              <input type="number" class="form-control input-lg" min="0" id="nuevoImpuestoVenta" name="nuevoImpuestoVenta" placeholder="0" required>

                               <input type="hidden" name="nuevoPrecioImpuesto" id="nuevoPrecioImpuesto" required>

                               <input type="hidden" name="nuevoPrecioNeto" id="nuevoPrecioNeto" required>

                              <span class="input-group-addon"><i class="fa fa-percent"></i></span>

                            </div>

                          </td>

                           <td style="width: 50%">

                            <div class="input-group">

                              <span class="input-group-addon"><i class="ion ion-social-usd"></i></span>

                              <input type="text" class="form-control input-lg" id="nuevoTotalVenta" name="nuevoTotalVenta" total="" placeholder="00000" readonly required>

                              <input type="hidden" name="totalVenta" id="totalVenta">


                            </div>

                          </td>

                        </tr>

                      </tbody>

                    </table>

                  </div>

                </div>

                <hr>

                <!--=====================================
                ENTRADA MÉTODO DE PAGO
                ======================================-->

                <div class="form-group row">

                  <div class="col-xs-6" style="padding-right:0px">

                     <div class="input-group">

                      <select class="form-control" id="nuevoMetodoPago" name="nuevoMetodoPago" required>
                        <option value="">Seleccione método de pago</option>
                        <option value="Efectivo">Efectivo</option>
                        <option value="TC">Tarjeta Crédito</option>
                        <option value="TD">Tarjeta Débito</option>
                      </select>

                    </div>

                  </div>

                  <div class="cajasMetodoPago"></div>

                  <input type="hidden" id="listaMetodoPago" name="listaMetodoPago">

                </div>

                <br>

              </div>

          </div>

          <div class="box-footer">

            <button type="submit" class="btn btn-primary pull-right">Guardar venta</button>

          </div>

        </form>


        </div>

      </div>

      <!--=====================================
      LA TABLA DE PRODUCTOS
      ======================================-->

      <div class="col-lg-7 hidden-md hidden-sm hidden-xs">

        <div class="box box-warning">

          <div class="box-header with-border"></div>

          <div class="box-body">

            <table class="table table-bordered table-striped dt-responsive tablaVentas">

               <thead>

                 <tr>
                  <th style="width: 10px">#</th>
                  <th>Imagen</th>
                  <th>Producto</th>
                  <th>Código</th>
                  <th>Descripcion</th>
                  <th>Stock</th>
                  <th>Acciones</th>
                </tr>

              </thead>

              <body>
                 <tr>
                  <td>1.</td>
                  <td><img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail" width="40px"></td>
                  <td>Moto SUSUKI</td>
                  <td>00123</td>
                  <td>Lorem ipsum dolor sit amet</td>
                  <td class="btn btn-info btn-sm">20</td>
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-primary">Agregar</button>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td>2.</td>
                  <td><img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail" width="40px"></td>
                  <td>Moto HONDA</td>
                  <td>00124</td>
                  <td>Lorem ipsum dolor sit amet</td>
                  <td class="btn btn-primary btn-sm">67</td>
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-primary">Agregar</button>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td>3.</td>
                  <td><img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail" width="40px"></td>
                  <td>Moto HIUNDAI</td>
                  <td>00125</td>
                  <td>Lorem ipsum dolor sit amet</td>
                  <td class="btn btn-danger btn-sm">11</td>
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-primary">Agregar</button>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td>4.</td>
                  <td><img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail" width="40px"></td>
                  <td>Moto SUSUKI 1</td>
                  <td>00126</td>
                  <td>Lorem ipsum dolor sit amet</td>
                  <td class="btn btn-primary btn-sm">25</td>
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-primary">Agregar</button>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td>5.</td>
                  <td><img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail" width="40px"></td>
                  <td>Moto KAWASAKI</td>
                  <td>00127</td>
                  <td>Lorem ipsum dolor sit amet</td>
                  <td class="btn btn-warning btn-sm">15</td>
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-primary">Agregar</button>
                    </div>
                  </td>
                </tr>

                 <tr>
                  <td>6.</td>
                  <td><img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail" width="40px"></td>
                  <td>Moto SUSUKI</td>
                  <td>00123</td>
                  <td>Lorem ipsum dolor sit amet</td>
                  <td class="btn btn-info btn-sm">20</td>
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-primary">Agregar</button>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td>7.</td>
                  <td><img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail" width="40px"></td>
                  <td>Moto HONDA</td>
                  <td>00124</td>
                  <td>Lorem ipsum dolor sit amet</td>
                  <td class="btn btn-primary btn-sm">67</td>
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-primary">Agregar</button>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td>8.</td>
                  <td><img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail" width="40px"></td>
                  <td>Moto HIUNDAI</td>
                  <td>00125</td>
                  <td>Lorem ipsum dolor sit amet</td>
                  <td class="btn btn-danger btn-sm">11</td>
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-primary">Agregar</button>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td>9.</td>
                  <td><img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail" width="40px"></td>
                  <td>Moto SUSUKI 1</td>
                  <td>00126</td>
                  <td>Lorem ipsum dolor sit amet</td>
                  <td class="btn btn-primary btn-sm">25</td>
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-primary">Agregar</button>
                    </div>
                  </td>
                </tr>

                <tr>
                  <td>10.</td>
                  <td><img src="vistas/img/productos/default/anonymous.png" class="img-thumbnail" width="40px"></td>
                  <td>Moto KAWASAKI</td>
                  <td>00127</td>
                  <td>Lorem ipsum dolor sit amet</td>
                  <td class="btn btn-warning btn-sm">15</td>
                  <td>
                    <div class="btn-group">
                      <button type="button" class="btn btn-primary">Agregar</button>
                    </div>
                  </td>
                </tr>


              </body>

            </table>

          </div>

        </div>


      </div>

    </div>

  </section>

</div>

<!--=====================================
MODAL AGREGAR CLIENTE
======================================-->

<div id="modalAgregarCliente" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#3c8dbc; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar cliente</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body">

          <div class="box-body">

            <!-- ENTRADA PARA EL NOMBRE -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-user"></i></span>

                <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Ingresar nombre" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL DOCUMENTO ID -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-key"></i></span>

                <input type="number" min="0" class="form-control input-lg" name="nuevoDocumentoId" placeholder="Ingresar documento" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL EMAIL -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>

                <input type="email" class="form-control input-lg" name="nuevoEmail" placeholder="Ingresar email" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL TELÉFONO -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-phone"></i></span>

                <input type="text" class="form-control input-lg" name="nuevoTelefono" placeholder="Ingresar teléfono" data-inputmask="'mask':'(999) 999-9999'" data-mask required>

              </div>

            </div>

            <!-- ENTRADA PARA LA DIRECCIÓN -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>

                <input type="text" class="form-control input-lg" name="nuevaDireccion" placeholder="Ingresar dirección" required>

              </div>

            </div>

             <!-- ENTRADA PARA LA FECHA DE NACIMIENTO -->

            <div class="form-group">

              <div class="input-group">

                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>

                <input type="text" class="form-control input-lg" name="nuevaFechaNacimiento" placeholder="Ingresar fecha nacimiento" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask required>

              </div>

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary">Guardar cliente</button>

        </div>

      </form>


    </div>

  </div>

</div>
