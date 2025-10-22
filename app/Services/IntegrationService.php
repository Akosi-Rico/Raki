<?php

namespace App\Services;

use App\Helpers\ProcessHelper;
use App\Models\Institution\Integration;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

class IntegrationService
{
    use ProcessHelper;
    
    public function verifyKey(string $apiKey, string $tenantDomain): object
    {
        try {

            if (Integration::where('domain', $tenantDomain)->where('api_key', $apiKey)->first()) {
                return response()->json(['valid' => true], Response::HTTP_OK);
            }

            return response()->json(['valid' => false], Response::HTTP_UNAUTHORIZED);
        } catch(\Throwable $th) {
            return response()->json(['valid' => false], Response::HTTP_BAD_REQUEST);
        }
    }

    public function processAttendance($payload)
    {
        try {
            DB::beginTransaction();

            // Process attendance logic

            DB::commit();
            return response()->json([
                'message'   =>  'Transaction Successfully', 
                'status'    =>  Response::HTTP_OK], Response::HTTP_OK);
        } catch(\Throwable $th) {
            DB::rollBack();
            return response()->json([
                'message'   =>  $th->getMessage(), 
                'status'    =>  Response::HTTP_BAD_REQUEST], Response::HTTP_BAD_REQUEST);
        }
    }

    public function processDocument($payload)
    {
        try {
            DB::beginTransaction();

            // Process document logic

            DB::commit();
            return response()->json([
                'message'   =>  'Transaction Successfully', 
                'status'    =>  Response::HTTP_OK], Response::HTTP_OK);
        } catch(\Throwable $th) {
            DB::rollBack();
            return response()->json([
                'message'   =>  $th->getMessage(), 
                'status'    =>  Response::HTTP_BAD_REQUEST], Response::HTTP_BAD_REQUEST);
        }
    }
}
