<?php
class Controlador1 extends CI_Controller {

        public function view($page = '')
        {
        if ( ! file_exists(APPPATH.'views/contenido/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }
		$data= array('nombre' => 'Bienvenido', 'seccion1' => 'Primera seccion', 'seccion2' => 'Segunda seccion');
		/*array
		$this->load->view('EncabezadoPie/header', $title);
        */
		
		$data['title'] = ucfirst($page); // Capitalize the first letter

        $this->load->view('EncabezadoPie/header', $data);//mandar llamar la variables
        $this->load->view('contenido/'.$page, $data);
        $this->load->view('EncabezadoPie/footer', $data);
        }
}
?>