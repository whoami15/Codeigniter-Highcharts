<?php


class Dashboard extends CI_Controller {

	
    public function __construct() {
        parent::__construct();

		$this->load->helper('url');
		$this->load->model('Data');

    }

    public function index() {
           //This is for PIE Chart. You need to count the table rows.

		$data['title'] = 'Dashboard';
		
		$data['theft'] = $this->Data->countTotalTheft();
		$data['hom'] = $this->Data->countTotalHomicide();
		$data['robbery'] = $this->Data->countTotalRobbery();
		$data['carnap'] = $this->Data->countTotalCarnap();
		$data['rape'] = $this->Data->countTotalRape();
		$data['murder'] = $this->Data->countTotalMurder();
		$data['vawc'] = $this->Data->countTotalVAWC();
		$data['pInjury'] = $this->Data->countTotalPInjury();
		$data['vta'] = $this->Data->countTotalVTA();

        $this->load->view('admin/dashboard/index', $data);
    }

    

    public function reports() {
		
		$data = $this->Data->countPerMonth();
		
		$category = array();
		$category['name'] = 'Category';
		
		$series1 = array();
		$series1['name'] = 'Users';
		
		$series2 = array();
		$series2['name'] = '';
		
		$series3 = array();
		$series3['name'] = '';
		
		foreach ($data as $row) {
		  $category['data'][] = $row->month;
			$series1['data'][] = $row->total;
			$series2['data'][] = $row->month;
			$series3['data'][] = $row->month;
		}
		
		$result = array();
		array_push($result,$category);
		array_push($result,$series1);
		array_push($result,$series2);
		array_push($result,$series3);
		
		print json_encode($result, JSON_NUMERIC_CHECK);
		
	}

	public function reportsyear() {
		
		$yearreport = $this->Data->countPerYear();
		
		$category = array();
		$category['name'] = 'Category';
		
		$series1 = array();
		$series1['name'] = '';
		
		$series2 = array();
		$series2['name'] = '';
		
		$series3 = array();
		$series3['name'] = 'Users';
		
		foreach ($yearreport as $row) {
		    $category['data'][] = $row->year;
			$series1['data'][] = $row->total;
			$series2['data'][] = $row->total;
			$series3['data'][] = $row->total;
		}
		
		$result = array();
		array_push($result,$category);
		array_push($result,$series1);
		array_push($result,$series2);
		array_push($result,$series3);
		
		print json_encode($result, JSON_NUMERIC_CHECK);
		
	}

	
	
}


/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */
