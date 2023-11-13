<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Job extends BaseController
{
    public function index()
    {
        // Load your model or get necessary data here

        // Example: Load a view
        return view('admin/v_job.php');  // Make sure the view file exists in the "Views" folder
    }
}
