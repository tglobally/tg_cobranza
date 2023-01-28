<?php
namespace tglobally\tg_cobranza\controllers;

use PDO;
use stdClass;
use tglobally\template_tg\html;

class controlador_cob_deuda extends \gamboamartin\cobranza\controllers\controlador_cob_deuda {

    public array $sidebar = array();

    public function __construct(PDO $link, stdClass $paths_conf = new stdClass()){
        $html_base = new html();
        parent::__construct( link: $link, html: $html_base);
        $this->titulo_lista = 'Deuda';

        $this->sidebar['lista']['titulo'] = "Deuda";
        $this->sidebar['lista']['menu'] = array(
            $this->menu_item(menu_item_titulo: "Alta", link: $this->link_alta,menu_seccion_active: true,
                menu_lateral_active: true));

        $this->sidebar['alta']['titulo'] = "Alta Deuda";
        $this->sidebar['alta']['stepper_active'] = true;
        $this->sidebar['alta']['menu'] = array(
            $this->menu_item(menu_item_titulo: "Alta Deuda", link: $this->link_alta,menu_lateral_active: true));

        $this->sidebar['modifica']['titulo'] = "Modifica Deuda";
        $this->sidebar['modifica']['stepper_active'] = true;
        $this->sidebar['modifica']['menu'] = array(
            $this->menu_item(menu_item_titulo: "Modifica Deuda", link: $this->link_alta,menu_lateral_active: true));

        $this->sidebar['pagos']['titulo'] = "Pagos";
        $this->sidebar['pagos']['stepper_active'] = true;
        $this->sidebar['pagos']['menu'] = array(
            $this->menu_item(menu_item_titulo: "Pagos", link: $this->link_alta,menu_lateral_active: true));

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
