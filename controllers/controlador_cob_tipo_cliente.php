<?php
namespace tglobally\tg_cobranza\controllers;

use PDO;
use stdClass;
use tglobally\template_tg\html;

class controlador_cob_tipo_cliente extends \gamboamartin\cobranza\controllers\controlador_cob_tipo_cliente {

    public array $sidebar = array();

    public function __construct(PDO $link, stdClass $paths_conf = new stdClass()){
        $html_base = new html();
        parent::__construct( link: $link, html: $html_base);
        $this->titulo_lista = 'Tipo Cliente';

        $this->sidebar['lista']['titulo'] = "Tipos de Cliente";
        $this->sidebar['lista']['menu'] = array(
            $this->menu_item(menu_item_titulo: "Alta", link: $this->link_alta,menu_seccion_active: true,
                menu_lateral_active: true));

        $this->sidebar['alta']['titulo'] = "Alta Tipo Cliente";
        $this->sidebar['alta']['stepper_active'] = true;
        $this->sidebar['alta']['menu'] = array(
            $this->menu_item(menu_item_titulo: "Alta Tipo Ingreso", link: $this->link_alta,menu_lateral_active: true));

        $this->sidebar['modifica']['titulo'] = "Modifica Tipo Cliente";
        $this->sidebar['modifica']['stepper_active'] = true;
        $this->sidebar['modifica']['menu'] = array(
            $this->menu_item(menu_item_titulo: "Modifica Tipo Ingreso", link: $this->link_alta,menu_lateral_active: true));

        $this->sidebar['clientes']['titulo'] = "Tipo Cliente";
        $this->sidebar['clientes']['stepper_active'] = true;
        $this->sidebar['clientes']['menu'] = array(
            $this->menu_item(menu_item_titulo: "Clientes", link: $this->link_alta,menu_lateral_active: true));

    }

    public function menu_item(string $menu_item_titulo, string $link, bool $menu_seccion_active = false,bool $menu_lateral_active = false): array
    {
        $menu_item = array();
        $menu_item['menu_item'] = $menu_item_titulo;
        $menu_item['menu_seccion_active'] = $menu_seccion_active;
        $menu_item['link'] = $link;
        $menu_item['menu_lateral_active'] = $menu_lateral_active;

        return $menu_item;
    }

}
