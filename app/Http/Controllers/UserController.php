<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Requests\UserLoginRequest;
use App\Models\User;
use App\Models\LokasiOtmil;
use App\Models\LokasiLemasmil;
use App\Models\Petugas;
use App\Models\UserRole;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Auth;



class UserController extends Controller
{
    public function login(UserLoginRequest $request): JsonResponse
    {
        $data = $request->validated();
        
        $user = User::select(
                'users.id', 'users.username', 'users.email', 'users.phone', 'users.petugas_id', 'users.last_login', 'users.expiry_date', 'users.lokasi_lemasmil_id', 'users.lokasi_otmil_id',
                'lokasi_lemasmil.nama_lokasi_lemasmil AS nama_lokasi_lemasmil',
                'lokasi_otmil.nama_lokasi_otmil AS nama_lokasi_otmil',
                'user_role.role_name',
                'petugas.nama',
                'petugas.nrp',
                'petugas.foto_wajah'
            )
            ->leftJoin('user_role', 'users.user_role_id', '=', 'user_role.id')
            ->leftJoin('lokasi_lemasmil', 'users.lokasi_lemasmil_id', '=', 'lokasi_lemasmil.id')
            ->leftJoin('lokasi_otmil', 'users.lokasi_otmil_id', '=', 'lokasi_otmil.id')
            ->leftJoin('petugas', 'users.petugas_id', '=', 'petugas.id')
            ->where('users.deleted_at', null)
            ->where('users.is_suspended', '0')
            ->where('petugas.nrp', $data['nrp'])
            ->where('users.password', $data['password'])
            ->first();

  
            // if(!$user || !Hash::check($data['password'], $user->password)) {
            //     throw new HttpResponseException(response([
            //         'status' => 'error',
            //         'message' => 'Login failed',
            //         'data' => 'Invalid credentials'
            //     ], JsonResponse::HTTP_UNAUTHORIZED));
            // }
        $token = $user->createToken('auth_token')->plainTextToken;
        return response()->json([
            'status' => 'success',
            'message' => 'login successfully',
            'data' => [
                'user' => $user,
                'token' => $token
            ]
        ], JsonResponse::HTTP_OK);
    }
}
