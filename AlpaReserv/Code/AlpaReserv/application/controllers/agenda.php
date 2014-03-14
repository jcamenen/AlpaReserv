<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
*	@author Julien CAMENEN
*
*
*/
class Agenda extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->helper('url');
		
		$this->load->view('commons/header.php');
		$data['calendarEvents'] = $this->createArrayOfEvents();
		$this->load->view('agenda/agenda.php', $data);

		$this->load->view('commons/footer.php');
	}

	private function createArrayOfEvents()
	{
		$this->load->model('reservation_model');		

		$listEvents = $this->reservation_model->readReservations();

		$script = '<script type="text/javascript"> var listOfEvents = [';

		foreach ($listEvents as $key => $event)
		{
			if($event->privacy == 1)
			{
				$script = $script."{title:'".$event->title."',start:'".$event->start."',end:'".$event->end."',color :'red'},";
			}
			else
			{
				$script = $script."{title:'".$event->title."',start:'".$event->start."',end:'".$event->end."',description :'".$event->description."',color :'blue'},";
			}
		}

		$rest = substr($script, 0, -1);

		$scriptFinal = $rest.'];</script>';

		return $scriptFinal;
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */