<?php
class News extends CI_Controller{

        public function __construct()
        {
                parent::__construct();
                $this->load->model('news_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['news'] = $this->news_model->get_news();
				$data['title'] = 'Noticias';

        $this->load->view('EncabezadoPie/header', $data);//mandar llamar la variables
        $this->load->view('news/index', $data);
        $this->load->view('EncabezadoPie/footer', $data);
				
        }

        public function view($slug = NULL)
        {
                $data['news_item'] = $this->news_model->get_news($slug);
				if (empty($data['news_item']))
                {
                show_404();
                }

        $data['title'] = 'Noticias';

        $this->load->view('EncabezadoPie/header', $data);//mandar llamar la variables
        $this->load->view('news/view', $data);
        $this->load->view('EncabezadoPie/footer', $data);
      
        }
		
		public function create()
{
    $this->load->helper('form');
    $this->load->library('form_validation');

    $data['title'] = 'Noticias';

    $this->form_validation->set_rules('title', 'Title', 'required');
    $this->form_validation->set_rules('autor', 'Autor', 'required');
    $this->form_validation->set_rules('text', 'Text', 'required');
	$this->form_validation->set_rules('fecha', 'Fecha', 'required');
    
	if ($this->form_validation->run() === FALSE)
    {
        $this->load->view('EncabezadoPie/header', $data);
        $this->load->view('news/create');
        $this->load->view('EncabezadoPie/footer', $data);
    }
    else
    {
	    $this->load->view('EncabezadoPie/header', $data);
        $this->news_model->set_news();
        $this->load->view('news/success');
		$this->load->view('EncabezadoPie/footer', $data);
    }
}
}