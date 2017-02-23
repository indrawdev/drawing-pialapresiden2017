<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index() {
		$this->load->model('home_mod');

        // Set the title
        $this->template->title = 'Drawing 8 Besar - Piala Presiden 2017';
        $this->template->description = 'Drawing 8 Besar - Piala Presiden 2017';

        // Dynamically add a css stylesheet
        $this->template->stylesheet->add('assets/css/bootstrap.min.css');
        $this->template->stylesheet->add('assets/css/font-awesome.min.css');
        $this->template->stylesheet->add('assets/css/main.css');
        
        // Dynamically add a javascript
        //$this->template->javascript->add('assets/js/jquery.min.js');
        //$this->template->javascript->add('assets/js/jquery-sortable.js');
        $this->template->javascript->add('assets/js/bootstrap.min.js');
        $this->template->javascript->add('assets/js/custom.js');

        //$data['lists'] = $this->home_mod->getDataList();
        $data['group1'] = $this->home_mod->checkGroup(1);
        $data['group2'] = $this->home_mod->checkGroup(2);
        $data['group3'] = $this->home_mod->checkGroup(3);
        $data['group4'] = $this->home_mod->checkGroup(4);
        $this->template->content->view('home_v', $data);

        // Set a partial's content
        $this->template->footer = '';
        
        // Publish the template
        $this->template->publish();
	}

	public function pot() {
		$this->load->model('home_mod');

        // Set the title
        $this->template->title = 'POT - Piala Presiden 2017';
        $this->template->description = 'POT - Piala Presiden 2017';

        // Dynamically add a css stylesheet
        $this->template->stylesheet->add('assets/css/bootstrap.min.css');
        $this->template->stylesheet->add('assets/css/font-awesome.min.css');
        $this->template->stylesheet->add('assets/css/main.css');
        
        // Dynamically add a javascript
        //$this->template->javascript->add('assets/js/jquery.min.js');
        //$this->template->javascript->add('assets/js/jquery-sortable.js');
        $this->template->javascript->add('assets/js/bootstrap.min.js');
        $this->template->javascript->add('assets/js/custom.js');

        //$data['lists'] = $this->home_mod->getDataList();
        $data['pot1'] = $this->home_mod->checkPot(1);
        $data['pot2'] = $this->home_mod->checkPot(2);
        $data['pot3'] = $this->home_mod->checkPot(3);
        $data['pot4'] = $this->home_mod->checkPot(4);
        $this->template->content->view('pot_v', $data);

        // Set a partial's content
        $this->template->footer = '';
        
        // Publish the template
        $this->template->publish();
	}

	public function display() {
		$this->load->model('home_mod');
		        // Set the title
        $this->template->title = 'Drawing 8 Besar - Piala Presiden 2017';
        $this->template->description = 'Drawing 8 Besar - Piala Presiden 2017';

        // Dynamically add a css stylesheet
        $this->template->stylesheet->add('assets/css/bootstrap.min.css');
        $this->template->stylesheet->add('assets/css/main.css');
        
        // Dynamically add a javascript
        //$this->template->javascript->add('assets/js/jquery.min.js');
        //$this->template->javascript->add('assets/js/jquery-sortable.js');
        $this->template->javascript->add('assets/js/bootstrap.min.js');

        $data['group1'] = $this->home_mod->checkGroup(1);
        $data['group2'] = $this->home_mod->checkGroup(2);
        $data['group3'] = $this->home_mod->checkGroup(3);
        $data['group4'] = $this->home_mod->checkGroup(4);
        $data['pot1'] = $this->home_mod->getGroup(1);
        $data['pot2'] = $this->home_mod->getGroup(2);
        $data['pot3'] = $this->home_mod->getGroup(3);
        $data['listgroup'] = $this->home_mod->listGroup();
        $data['listsort'] = $this->home_mod->listSort();
        $data['listpot'] = $this->home_mod->listPot();
        $this->template->content->view('display_v', $data);
       // $this->printOut($html);
        // Set a partial's content
        $this->template->footer = '';
        
        // Publish the template
        $this->template->publish();   
	}

	public function drag_order($id, $group, $item) {
		$this->load->model('home_mod');
		$this->home_mod->dragItem($id, $group, $item);
		return true;
	}

	public function update() {
		$this->load->model('home_mod');
		$id = $this->input->post('id');
		$group = $this->input->post('group');
		$item = $this->input->post('item_id');
		$sort = $this->input->post('sort');
        $pot = $this->input->post('pot');
		$this->home_mod->updateGroup($id, $group, $item, $sort, $pot);
		redirect("home/display");
	}

	public function printOut() {
		$this->load->model('home_mod');

		$data['group1'] = $this->home_mod->checkGroup(1);
        $data['group2'] = $this->home_mod->checkGroup(2);
        $data['group3'] = $this->home_mod->checkGroup(3);
        $data['group4'] = $this->home_mod->checkGroup(4);	

        //$this->load->view('print_v', $data);
		$html = $this->load->view('print_v', $data, true);
		
		$pdfFilePath = "printout.pdf";
		
		$this->load->library('m_pdf');
		$this->m_pdf->pdf->WriteHTML($html);
		$this->m_pdf->pdf->Output($pdfFilePath, "D"); 
	}

	public function printPdf() {
		$this->load->model('home_mod');

		$data['group1'] = $this->home_mod->checkGroup(1);
        $data['group2'] = $this->home_mod->checkGroup(2);
        $data['group3'] = $this->home_mod->checkGroup(3);
        $data['group4'] = $this->home_mod->checkGroup(4);	

        //$this->load->view('print_v', $data);
		$html = $this->load->view('print_v', $data, true);
	    $this->load->library('pdf');
	    $filename = 'Drawing';
	    $paper = 'A4';
	    $orientation = 'potrait';
	    pdf_create($html, $filename, $paper, $orientation);
	}


	public function preview() {
		$this->load->model('home_mod');

		$data['group1'] = $this->home_mod->checkGroup(1);
        $data['group2'] = $this->home_mod->checkGroup(2);
        $data['group3'] = $this->home_mod->checkGroup(3);
        $data['group4'] = $this->home_mod->checkGroup(4);	
		$this->load->view('print_v', $data);
	}

	public function printNow() {
        $this->load->model('home_mod');
        $this->load->library('Pdf');
        $data['group1'] = $this->home_mod->checkGroup(1);
        $data['group2'] = $this->home_mod->checkGroup(2);
        $data['group3'] = $this->home_mod->checkGroup(3);
        $data['group4'] = $this->home_mod->checkGroup(4);   
        $html = $this->load->view('print_v', $data, true);
        $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
        $pdf->SetTitle('DRAWING 8 BESAR - PIALA PRESIDEN 2017');
        //$pdf->SetHeaderMargin(30);
        //$pdf->SetTopMargin(20);
        //$pdf->setFooterMargin(20);
        $pdf->SetPrintHeader(false);
        $pdf->SetPrintFooter(false);
        $pdf->SetAutoPageBreak(false);
        $pdf->SetAuthor('PSSI');
        $pdf->SetDisplayMode('real', 'default');
        $pdf->AddPage();
        $pdf->writeHTML($html, true, false, true, false, '');
        $pdf->Output('drawing_piala_presiden.pdf', 'I');
	}


}