<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JGDevController extends Controller
{
	public function home() {
		return view( 'home' );
	}

	public function condor_elite() {
		return view( 'project-template', [
			'title' => 'Condor Elite',
			'category' => 'Ecommerce',
			'tech_stack' => 'Magento, PHP, jQuery Mobile, CSS, JavaScript, jQuery',
			'url' => 'https://www.condor-elite.com/',
			'description' => 'Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.',
			'imgs' => [ 'ce-1.jpg', 'ce-2.jpg', 'ce-3.jpg' ],
		] );
	}

	public function discount_dance() {
		return view( 'project-template', [
			'title' => 'Discount Dance',
			'category' => 'Ecommerce',
			'tech_stack' => 'PHP, jQuery Mobile, CSS, JavaScript, jQuery, New Relic, Mouseflow, InkSoft',
			'url' => 'https://www.discountdance.com/',
			'description' => 'Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.',
			'imgs' => [ 'dd-1.jpg', 'dd-2.jpg', 'dd-3.jpg' ],
		] );
	}

	public function uat_parts() {
		return view( 'project-template', [
			'title' => 'UAT Parts',
			'category' => 'Ecommerce',
			'tech_stack' => 'Miva Merchant, PHP, HTML, CSS, JavaScript, jQuery',
			'url' => 'https://www.uatparts.com/',
			'description' => 'Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.',
			'imgs' => [ 'up-1.jpg', 'up-2.jpg', 'up-3.jpg' ],
		] );
	}

	public function nevada_corporate_headquarters() {
		return view( 'project-template', [
			'title' => 'Nevada Corporate Headquarters',
			'category' => 'Laravel',
			'tech_stack' => 'Laravel, Bootstrap',
			'url' => 'https://www.nchinc.com/',
			'description' => 'Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.',
			'imgs' => [ 'nch-1.jpg', 'nch-2.jpg', 'nch-3.jpg' ],
		] );
	}

	public function nch_portal() {
		return view( 'project-template', [
			'title' => 'Client Portal',
			'category' => 'Laravel',
			'tech_stack' => 'Laravel, Bootstrap',
			'url' => 'https://portal.nchinc.com/',
			'description' => 'Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.',
			'imgs' => [ 'portal-1.jpg', 'portal-2.jpg', 'portal-3.jpg' ],
		] );
	}

	public function csc() {
		return view( 'project-template', [
			'title' => 'Corporate Service Center',
			'category' => 'Laravel',
			'tech_stack' => 'Laravel, Bootstrap',
			'url' => 'https://www.corporateservicecenter.com/',
			'description' => 'Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.',
			'imgs' => [ 'csc-1.jpg', 'csc-2.jpg', 'csc-3.jpg' ],
		] );
	}

	public function vault() {
		return view( 'project-template', [
			'title' => 'Company Vault',
			'category' => 'Web',
			'tech_stack' => 'WordPress',
			'url' => '',
			'description' => 'Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.',
			'imgs' => [ 'vault-1.jpg', 'vault-2.jpg', 'vault-3.jpg' ],
		] );
	}

	public function paul() {
		return view( 'project-template', [
			'title' => 'Paul Tzanetopoulos',
			'category' => 'Art, Personal, Biography, Portfolio, Blog',
			'tech_stack' => 'WordPress, Avada, Custom Post Type',
			'url' => 'https://www.paultzanetopoulos.com/',
			'description' => 'Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.',
			'imgs' => [ 'paul-1.jpg', 'paul-2.jpg', 'paul-3.jpg' ],
		] );
	}

	public function vital_care_lab() {
		return view( 'project-template', [
			'title' => 'Vital Care Lab',
			'category' => 'Web, Medical, Blog',
			'tech_stack' => 'WordPress, Custom Post Type, ',
			'url' => '',
			'description' => 'Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim. Voluptatem officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim cum deserunt eius.',
			'imgs' => [ 'vital-1.jpg' ],
		] );
	}
}
