
<?php
namespace App\Controllers;

use CodeIgniter\Controller;

class Pages extends Controller 

{

        public function view($page = 'home')
        {
        	if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        {
                // Whoops, we don't have a page for that!
                show_404();
        }

        $data['title'] = ucfirst($page); // Capitalize the first letter

        echo view('templates/header');
        echo view('pages/'.$page,);
        echo view('templates/footer');

        }
}


