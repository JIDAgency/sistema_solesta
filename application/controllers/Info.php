<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends MY_Controller {

	public function __construct()
    {
		parent::__construct();
		$this->load->model('contactos_model');
    }

	public function index()
	{
		redirect("info/acerca");
	}

	public function acerca()
	{
		$data['pagina_menu_inicio'] = true;
		$data['pagina_titulo'] = 'Info';

		$data['controlador'] = 'index';
		$data['regresar_a'] = 'info';
		$controlador_js = "info/index";

		$data['styles'] = array(
		);
		$data['scripts'] = array(
			array('es_rel' => true, 'src' => ''.$controlador_js.'.js'),
		);
		
		$this->construir_public_ui('info/acerca', $data);
	}
	
	public function contacto()
	{
		$data['pagina_menu_inicio'] = true;
		$data['pagina_titulo'] = 'Contacto';

		$this->load->library('email');
		$this->load->helper('string');

		$data['controlador'] = 'info/contacto';
		$data['regresar_a'] = 'info';
		$controlador_js = "info/contacto";

		$data['mensaje_exito'] = $this->session->flashdata('MENSAJE_EXITO');
        $data['mensaje_info'] = $this->session->flashdata('MENSAJE_INFO');
        $data['mensaje_error'] = $this->session->flashdata('MENSAJE_ERROR');

		$data['styles'] = array(
		);
		$data['scripts'] = array(
			//array('es_rel' => false, 'src' => 'https://www.google.com/recaptcha/api.js'),
			array('es_rel' => true, 'src' => ''.$controlador_js.'.js'),
		);

		$this->form_validation->set_rules('contacto_nombre', 'Nombre', 'trim|required|min_length[4]|max_length[60]');
		$this->form_validation->set_rules('contacto_correo_electronico', 'Correo electrónico', 'trim|required|valid_email|min_length[6]|max_length[60]');
		$this->form_validation->set_rules('contacto_no_telefono', 'Número de contacto', 'trim|min_length[10]|max_length[10]');
		$this->form_validation->set_rules('contacto_mensaje', 'Mensaje', 'trim|required|min_length[12]|max_length[240]');
		$this->form_validation->set_rules('validar_captcha', 'Captcha', 'trim|required|min_length[6]|max_length[6]');
		$this->form_validation->set_rules('verificacion_captcha', 'Captcha', 'trim|required|min_length[6]|max_length[6]');

		$codigo = strtoupper(random_string('alnum', 6));

		$data['codigo'] = $codigo;

		if ($this->form_validation->run() == false) {
			$this->construir_public_ui('info/contacto', $data);
		} else {

			if ($this->input->post()) {
				$contacto_nombre = $this->input->post('contacto_nombre');
				$contacto_correo_electronico = $this->input->post('contacto_correo_electronico');
				$contacto_no_telefono = $this->input->post('contacto_no_telefono');
				$contacto_asunto = $this->input->post('contacto_asunto');
				$contacto_mensaje = $this->input->post('contacto_mensaje');
				$validar_captcha = $this->input->post('validar_captcha');
				$verificacion_captcha = $this->input->post('verificacion_captcha');
			}
			
			$contacto_ip = $this->input->ip_address();
			$contacto_date = date('Y-m-d H:i:s');

			if ($this->input->post('validar_captcha') != $verificacion_captcha) {
				$this->session->set_flashdata('MENSAJE_ERROR', '¡Oops! Es necesario que el captcha coincida, por favor intentelo de nuevo. (1)');
				$this->session->set_flashdata('contacto_nombre',$contacto_nombre);
				$this->session->set_flashdata('contacto_correo_electronico',$contacto_correo_electronico);
				$this->session->set_flashdata('contacto_no_telefono',$contacto_no_telefono);
				$this->session->set_flashdata('contacto_asunto',$contacto_asunto);
				$this->session->set_flashdata('contacto_mensaje',$contacto_mensaje);
				redirect($data['controlador']);
			}

			$config['mailtype'] = 'html';

            $mensaje = $this->load->view('_templates/contacvto.tpl.php', array('titulo' => titulo(), 'contacto_nombre' => $contacto_nombre, 'contacto_correo_electronico' => $contacto_correo_electronico, 'contacto_no_telefono' => $contacto_no_telefono, 'contacto_asunto' => $contacto_asunto, 'contacto_mensaje' => $contacto_mensaje, 'contacto_ip' => $contacto_ip, 'contacto_date' => date('d/m/Y H:i',strtotime($contacto_date))), true);

			$this->email->initialize($config);                        	
			$this->email->clear();
			$this->email->from(email_envio(), titulo());
			$this->email->to(email_contacto());
			$this->email->subject('Nuevo mensaje de contacto ['.titulo().' | '.date('d/m/Y').' ]');
			$this->email->message($mensaje);
			
			if ($this->email->send()) {

				if (!$this->contactos_model->insert_contacto(array('nombre' => $contacto_nombre, 'correo_electronico' => $contacto_correo_electronico, 'no_telefono' => $contacto_no_telefono, 'asunto' => $contacto_asunto, 'mensaje' => $contacto_mensaje, 'ip' => $contacto_ip, 'fecha_registro' => $contacto_date))) {
					$this->session->set_flashdata('MENSAJE_ERROR', '¡Oops! Al parecer ha ocurrido un error, por favor intentelo más tarde. (2)');
					redirect($data['controlador']);
				}

				$this->session->set_flashdata('MENSAJE_EXITO', 'Mensaje enviado con éxito.');
				redirect('info/agradecimiento');
			} else {
				$this->session->set_flashdata('MENSAJE_ERROR', '¡Oops! Al parecer ha ocurrido un error, por favor intentelo más tarde. (3)');
				redirect($data['controlador']);
			}
			
			$this->construir_public_ui('info/contacto', $data);
		}
	}
	
	public function contact()
	{
		
		$this->load->library('email');
		$this->load->library('form_validation');
	
		//Set form validation
		$this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[4]|max_length[16]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|min_length[6]|max_length[60]');
		$this->form_validation->set_rules('message', 'Message', 'trim|required|min_length[12]|max_length[200]');
	
		//Run form validation
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('contact');
		} else {
	
			//Get the form data
			$name = $this->input->post('name');
			$from_email = $this->input->post('email');
			$subject = $this->input->post('subject');
			$message = $this->input->post('message');
	
			//Web master email
			$to_email = 'admin@domain.com'; //Webmaster email, who receive mails
	
			//Mail settings
			$config['protocol'] = 'smtp';
			$config['smtp_host'] = 'ssl://smtp.gmail.com';
			$config['smtp_port'] = '465';
			$config['smtp_user'] = 'mail@domain.com'; // Your email address
			$config['smtp_pass'] = 'mailpassword'; // Your email account password
			$config['mailtype'] = 'html'; // or 'text'
			$config['charset'] = 'iso-8859-1';
			$config['wordwrap'] = TRUE; //No quotes required
			$config['newline'] = "\r\n"; //Double quotes required
	
			$this->email->initialize($config);                        
	
			//Send mail with data
			$this->email->from($from_email, $name);
			$this->email->to($to_email);
			$this->email->subject($subject);
			$this->email->message($message);
			
			if ($this->email->send())
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success">Mail sent!</div>');
				redirect('contact');
			} else {
				$this->session->set_flashdata('msg','<div class="alert alert-danger">Problem in sending</div>');
				$this->load->view('contact');
			}
	
		}
	}
	
	public function aviso_privacidad()
	{
		$data['pagina_menu_inicio'] = true;
		$data['pagina_titulo'] = 'Aviso de privacidad';

		$data['controlador'] = 'index';
		$data['regresar_a'] = 'info';
		$controlador_js = "info/aviso_privacidad";

		$data['mensaje_exito'] = $this->session->flashdata('MENSAJE_EXITO');
        $data['mensaje_info'] = $this->session->flashdata('MENSAJE_INFO');
		$data['mensaje_error'] = $this->session->flashdata('MENSAJE_ERROR');

		$data['styles'] = array(
		);
		$data['scripts'] = array(
			array('es_rel' => true, 'src' => ''.$controlador_js.'.js'),
		);
		
		$this->construir_public_ui('info/aviso_privacidad', $data);
	}
	
	public function agradecimiento()
	{
		$data['pagina_menu_inicio'] = true;
		$data['pagina_titulo'] = 'Agradecimiento';

		$data['controlador'] = 'info/agradecimiento';
		$data['regresar_a'] = 'info';
		$controlador_js = "info/agradecimiento";

		$data['mensaje_exito'] = $this->session->flashdata('MENSAJE_EXITO');
        $data['mensaje_info'] = $this->session->flashdata('MENSAJE_INFO');
		$data['mensaje_error'] = $this->session->flashdata('MENSAJE_ERROR');
		
		$data['styles'] = array(
		);
		$data['scripts'] = array(
			array('es_rel' => true, 'src' => ''.$controlador_js.'.js'),
		);
		
		$this->load->view('info/agradecimiento', $data);
    }

	public function terminos_y_condiciones_viaje()
	{
		$data['pagina_menu_info'] = true;
		$data['pagina_titulo'] = 'Términos y condiciones del viaje';

		$data['controlador'] = 'info/terminos_y_condiciones_viaje';
		$data['regresar_a'] = 'info';
		$controlador_js = "info/terminos_y_condiciones_viaje";

		$data['mensaje_exito'] = $this->session->flashdata('MENSAJE_EXITO');
        $data['mensaje_info'] = $this->session->flashdata('MENSAJE_INFO');
		$data['mensaje_error'] = $this->session->flashdata('MENSAJE_ERROR');
		
		$data['styles'] = array(
		);
		$data['scripts'] = array(
			array('es_rel' => true, 'src' => ''.$controlador_js.'.js'),
		);
		
		$this->construir_public_ui('info/terminos_y_condiciones_viaje', $data);
    }
    
}
