<?php /** @var \tglobally\tg_cobranza\controllers\controlador_cob_deuda $controlador */ ?>


<?php (new \tglobally\template_tg\template())->sidebar($controlador); ?>

<div class="col-md-9 formulario">
    <div class="col-lg-12">

        <h3 class="text-center titulo-form">Hola, <?php echo $controlador->datos_session_usuario['adm_usuario_user']; ?> </h3>

        <div class="  form-main" id="form">
            <form method="post" action="<?php echo $controlador->link_cob_pago_alta_bd;?>" class="form-additional">

                <?php echo $controlador->inputs->cob_pago_codigo; ?>
                <?php echo $controlador->inputs->cob_pago_descripcion; ?>
                <?php echo $controlador->inputs->cob_pago_fecha_de_pago; ?>
                <?php echo $controlador->inputs->cob_pago_monto; ?>
                <?php echo $controlador->inputs->select->cob_deuda_id; ?>
                <?php echo $controlador->inputs->select->bn_cuenta_id; ?>
                <?php echo $controlador->inputs->select->cat_sat_forma_pago_id; ?>
                <?php echo $controlador->inputs->select->cob_caja_id; ?>

                <div class="buttons col-md-12">
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-info btn-guarda col-md-12 " name="btn_action_next" value="modifica">Guarda</button>
                    </div>
                    <div class="col-md-6 ">
                        <a href="<?php echo $controlador->link_lista; ?>"  class="btn btn-info btn-guarda col-md-12 ">Lista</a>
                    </div>
                </div>
            </form>
        </div>

        <div class="lista">
            <div class="card">
                <div class="card-header">
                    <span class="text-header">Deudas</span>
                </div>
                <div class="card-body">
                    <div class="cont_tabla_sucursal  col-md-12">
                        <?php echo $controlador->contenido_table; ?>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
