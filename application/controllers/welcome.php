<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		if(!$this->session->userdata('gold'))
		{
			$this->session->set_userdata('gold', 0);
			$this->session->set_userdata('activities', array());
		}

		$data = array(
			'all_gold'=>$this->session->userdata('gold'),
			'all_activities' => $this->session->userdata('activities')
		);

		$this->load->view('main', $data);

	}


	public function find_gold() 
	{
		if($this->input->post('building') == 'farm'){
			$num = rand(10,20);
			$temp_gold = $this->session->userdata('gold');
			$temp_gold += $num;
			$this->session->set_userdata('gold', $temp_gold);

			$temp_activites= $this->session->userdata('activities');
			$temp_activites[] = "<p style=color:green>You won {$num} from the farm.</p>";
			$this->session->set_userdata('activities', $temp_activites);




		}elseif($this->input->post('building') == 'cave'){
			$num = rand(5,10);
			$temp_gold = $this->session->userdata('gold');
			$temp_gold += $num;
			$this->session->set_userdata('gold', $temp_gold);


			$temp_activites= $this->session->userdata('activities');
			$temp_activites[] = "<p style=color:green>You won {$num} from the cave.</p>";
			$this->session->set_userdata('activities', $temp_activites);

		}elseif($this->input->post('building') == 'house'){
			$num = rand(2,5);
			$temp_gold = $this->session->userdata('gold');
			$temp_gold += $num;
			$this->session->set_userdata('gold', $temp_gold);

			$temp_activites= $this->session->userdata('activities');
			$temp_activites[] = "<p style=color:green>You won {$num} from the house.</p>";
			$this->session->set_userdata('activities', $temp_activites);


		}elseif($this->input->post('building') == 'casino'){
			$num = rand(0,50);
			$gamble = rand(1,2);

			if($gamble == 1){
				$temp_gold = $this->session->userdata('gold');
				$temp_gold += $num;
				$this->session->set_userdata('gold', $temp_gold);

				$temp_activites= $this->session->userdata('activities');
				$temp_activites[] = "<p style=color:green>You won {$num} from the casino.</p>";
				$this->session->set_userdata('activities', $temp_activites);
			}

			elseif($gamble == 2){
			$temp_gold = $this->session->userdata('gold');
			$temp_gold -= $num;
			$this->session->set_userdata('gold', $temp_gold);

			$temp_activites= $this->session->userdata('activities');
			$temp_activites[] = "<p style=color:red>You lost {$num} from the casino.</p>";
			$this->session->set_userdata('activities', $temp_activites);
			}
		}
		redirect('/');
	}

	public function reset()
	{
		$this->session->unset_userdata('activities');
		$this->session->unset_userdata('gold');
		redirect('/');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */