<?php
namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\JsonResponse;
use Illuminate\Database\Eloquent\Model;
class StudentController extends Controller{
    public function show($id): JsonResponse
    {
        $student = Student::find($id);
        if(!$student){
            return response()->json(['error' => 'Student not found'], 404);
        }
        return response()->json($student, 200);
    }
}
