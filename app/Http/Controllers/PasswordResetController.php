<?php

namespace App\Http\Controllers;

use App\DTO\SystemUserDTOs\PasswordResetDTO;
use App\Http\Requests\SystemUser\ForgotPasswordRequest;
use App\Http\Requests\SystemUser\ResetPasswordRequest;
use App\Services\PasswordResetService;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Password;

class PasswordResetController extends Controller
{
    public function __construct(protected PasswordResetService $service) {}

    public function sendResetLink(ForgotPasswordRequest $request): JsonResponse
    {
        $status = $this->service->sendResetLink($request->input('email'));

        return $status === Password::RESET_LINK_SENT
            ? response()->json(['message' => __($status)], 200)
            : response()->json(['message' => __($status)], 422);
    }

    public function reset(ResetPasswordRequest $request): JsonResponse
    {
        $dto = new PasswordResetDTO(
            token: $request->input('token'),
            email: $request->input('email'),
            password: $request->input('password'),
            password_confirmation: $request->input('password_confirmation'),
        );

        $status = $this->service->reset($dto);

        return $status === Password::PASSWORD_RESET
            ? response()->json(['message' => __($status)], 200)
            : response()->json(['message' => __($status)], 422);
    }
}
