<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Home extends Controller
{
	public function index()
	{
		return view('welcome_message');
	}

	public function mate1()
    {
        return view('jeff_message');
    }

    public function mate2() 
    {
    	return view('jin_message');
	}
	
	public function mate3()
	{
		return view('keith_message');
	}
	//--------------------------------------------------------------------

}
