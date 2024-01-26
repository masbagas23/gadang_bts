<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChecklistStoreRequest;
use App\Models\Checklist;
use App\Models\DB;
use Illuminate\Http\Response;

class ChecklistController extends Controller
{
    /**
     * Get checklist
     *
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $data = Checklist::all();
            return response([
                'status' => 'success',
                'data' => $data
            ]);
        } catch (\Exception $e) {
            return response([
                'status' => 'error',
                'data' => $e->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Create new checklist
     * @param ChecklistStoreRequest $request
     *
     * @return Illuminate\Http\Response
     */
    public function store(ChecklistStoreRequest $request)
    {
        DB::beginTransaction();
        try {
            $data = Checklist::create([
                'name' => $request->name
            ]);
            DB::commit();
            return response([
                'status' => 'success',
                'data' => $data
            ]);
        } catch (\Exception $e) {
            DB::rollback();
            return response([
                'status' => 'error',
                'data' => $e->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    /**
     * Delete checklist
     * @param int $id
     *
     * @return Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        DB::beginTransaction();
        try {
            Checklist::find($id)->delete();
            DB::commit();
            return response([
                'status' => 'success',
            ]);
        } catch (\Exception $e) {
            DB::rollback();
            return response([
                'status' => 'error',
                'data' => $e->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
