<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ProfileController extends Controller
{
    public function index(): JsonResponse
    {
        $profiles = Profile::all();
        return new JsonResponse($profiles);
    }

    public function show(Profile $profile): JsonResponse
    {
        return new JsonResponse($profile);
    }

    public function store(Request $request): JsonResponse
    {
        Profile::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'document_number' => $request->documentNumber,
            'user_id' => $request->userId,
        ]);
        return new JsonResponse(['message' => 'Profile registered successfully']);
    }

    public function update(Profile $profile, Request $request): JsonResponse
    {
        $profile->update([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'document_number' => $request->documentNumber,
        ]);
        return new JsonResponse(['message' => 'Profile updated successfully']);
    }

    public function delete(Profile $profile): JsonResponse
    {
        $profile->delete();
        return new JsonResponse(['message' => 'Profile deleted successfully']);
    }
}
