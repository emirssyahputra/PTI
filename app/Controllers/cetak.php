<?php

namespace App\Controllers;

use Dompdf\Dompdf;
use Dompdf\Options;

class Cetak extends BaseController
{
    public function index()
    {
        // Path menuju file HTML yang ingin diubah menjadi PDF
        $html = view('admin/v_cetak'); // Gantilah 'nama_file_html' dengan nama file HTML Anda

        // Load library Dompdf
        $options = new Options();
        $options->set('isHtml5ParserEnabled', true);
        $options->set('isPhpEnabled', true);
        $options->set('isRemoteEnabled', true);

        $dompdf = new Dompdf($options);

        // Load HTML content
        $dompdf->loadHtml($html);

        // Set paper size (A4)
        $dompdf->setPaper('A4', 'portrait');

        // Render PDF (first pass to get the length)
        $dompdf->render();

        // Output file
        $dompdf->stream("output.pdf", array("Attachment" => false));
    }
}
