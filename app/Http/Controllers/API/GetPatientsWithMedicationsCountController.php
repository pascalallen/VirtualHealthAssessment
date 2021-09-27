<?php

declare(strict_types=1);

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\API\GetPatientsWithMedicationsCountRequest;
use App\Repositories\PatientRepositoryInterface;
use Doctrine\DBAL\Exception;
use Illuminate\Http\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class GetPatientsWithMedicationsCountController
 */
class GetPatientsWithMedicationsCountController extends Controller
{
    /**
     * Constructs GetPatientsWithMedicationsCountController
     */
    public function __construct(protected PatientRepositoryInterface $patientRepository)
    {
    }

    /**
     * Handle the incoming request.
     */
    public function __invoke(GetPatientsWithMedicationsCountRequest $request): JsonResponse
    {
        try {
            $patients = $this->patientRepository
                ->getAllWithMinimumMedicationCount(
                    (int) $request->query('minimum_count')
                );

            return response()->json($patients, Response::HTTP_OK);
        } catch (Exception $exception) {
            return response()->json([
                'message' => $exception->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
