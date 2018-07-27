<?php
defined('BASEPATH') OR exit('No direct script access allowed');

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	function guzzle_http() {
		require 'vendor/autoload.php';
		$url='https://www.amazon.com/Tenergy-Headless-Hovering-Batteries-Exclusive/dp/B071CZ2F3N/ref=br_msw_pdt-2/147-1207671-1004655?_encoding=UTF8&smid=A1KWJVS57NX03I&pf_rd_m=ATVPDKIKX0DER&pf_rd_s=&pf_rd_r=QR050FEE06N48W7YZQ4D&pf_rd_t=36701&pf_rd_p=b04ed72c-d4c3-4435-888e-60d9f57df703&pf_rd_i=desktop';
		$client = new \GuzzleHttp\Client();
		$res = $client->request('GET', $url);
		debug( $res->getStatusCode());
		echo '<br>';
		// 200
		echo $res->getHeaderLine('content-type');
		echo '<br>';
		// 'application/json; charset=utf8'
		$body= $res->getBody();
		debug($body);
		echo $body;
	}

	 
}
