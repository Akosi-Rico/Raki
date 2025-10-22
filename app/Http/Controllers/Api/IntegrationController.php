<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Services\IntegrationService;

class IntegrationController extends Controller
{
    public function verifyKey()
    {
        return (new IntegrationService())->verifyKey(request()->apiKey, request()->tenantUrl);
    }

    public function processAttendance()
    {
        return (new IntegrationService())->processAttendance(request()->payload);
    }

    public function processDocument()
    {
        return (new IntegrationService())->processDocument(request()->payload);
    }
}
