<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Enrollment;
use Illuminate\Http\Request;
use Flash;
use Response;

class EnrollmentController extends Controller {

    public $successStatus = 200;

    public function enrollmentAPI() {
        $enrollment = enrollment::all();

        if (count($enrollment) > 0) {
            return response()->json($enrollment, $this->successStatus);
        } else {
            return response()->json(['Error' => 'There is no enrollment form in the database'], 404);
        }        
    }
}

?>