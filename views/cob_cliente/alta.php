<?php /** @var \tglobally\tg_cobranza\controllers\controlador_cob_cliente $controlador */ ?>

<?php (new \tglobally\template_tg\template())->sidebar($controlador); ?>

<div class="col-md-9 formulario">
    <div class="col-lg-12">

        <h3 class="text-center titulo-form">Hola, <?php echo $controlador->datos_session_usuario['adm_usuario_user']; ?> </h3>

        <div class="  form-main" id="form">
            <form method="post" action="<?php echo $controlador->link_alta_bd;?>" class="form-additional">

                <?php echo $controlador->inputs->codigo; ?>
                <?php echo $controlador->inputs->codigo_bis; ?>
                <?php echo $controlador->inputs->nombre; ?>
                <?php echo $controlador->inputs->ap; ?>
                <?php echo $controlador->inputs->am; ?>
                <?php echo $controlador->inputs->curp; ?>
                <?php echo $controlador->inputs->descripcion; ?>
                <?php echo $controlador->inputs->razon_social; ?>
                <?php echo $controlador->inputs->rfc; ?>

                <?php echo $controlador->inputs->cob_tipo_cliente_id; ?>
                <?php echo $controlador->inputs->org_sucursal_id; ?>


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
    </div>
</div>
