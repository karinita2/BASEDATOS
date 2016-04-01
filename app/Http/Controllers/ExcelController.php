<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Maatwebsite\Excel\Facades\Excel;
use App\Docente;

class ExcelController extends Controller
{
    	public function index()
		{
 
	        Excel::create('Docentes_Detalles', function($excel) {
	 
	            // Set the title
			    $excel->setTitle('Detalle de registro de docentes');
			    // Chain the setters
			    $excel->setCreator('Aponwao')
			          ->setCompany('ChinakMeru');
			    // Call them separately
			    $excel->setDescription('Detalles del registro de los docentes');
	            
			    //Hoja principal
	            $excel->sheet('Docentes', function($sheet) {
	                //Añadir estilos
					// Font family
					$sheet->setFontFamily('Ariel');
					// Font size
					$sheet->setFontSize(12);
					// Font bold
					$sheet->setFontBold(false);

					// Auto filter for entire sheet
					$sheet->setAutoFilter();

					// Set auto filter for a range
					$sheet->setAutoFilter('A1:E10');
					
					// Set auto size for sheet
					$sheet->setAutoSize(true);
					
					// Set multiple column formats
					/*
					$sheet->setColumnFormat(array(
					    'B' => '0',
					    'D' => '0.00',
					    'F' => '@',
					    'F' => 'yyyy-mm-dd',
					));*/

	 				
	 				$products = Docente::datosDocentesFull();

	 				$data = json_decode(json_encode((array) $products), true);
        			
        			/*
  			        foreach ($products as $key => $product) 
				      {
				        //dd($product->toArray());
				        $data[] = array(
				            "cedula"=> $product->cedula,
				            "apellido1" => $product->apellido1,
				            "nombre1"=> $product->nombre1
				          
				        );
				      }*/


					$sheet->fromArray($data);
					//$sheet->fromModel(new User());
 
	            });
	        })->export('xls');
 
		}
}
