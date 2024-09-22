<?php

namespace App\Http\Controllers;

use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function downloadPDF($id)
    {
        $user = User::findOrFail($id);

        $pdf = Pdf::loadView('pdf.user_details', ['user' => $user])
            ->setPaper('a4', 'portrait');


        return $pdf->download('users-details.pdf');
    }
}
