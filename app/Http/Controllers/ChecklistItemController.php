<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChecklistItemRequest;
use App\Models\ChecklistItem;
use App\Models\DB;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ChecklistItemController extends Controller
{
    /**
     * Get checklist item
     * @param int $checklist_id
     * @return Illuminate\Http\Response
     */
    public function index(int $checklist_id)
    {
        try {
            $data = ChecklistItem::where('checklist_id', $checklist_id)->get();
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
     * Create new checklist item
     * @param ChecklistStoreRequest $request
     *
     * @return Illuminate\Http\Response
     */
    public function store(ChecklistItemRequest $request, int $checklist_id)
    {
        DB::beginTransaction();
        try {
            $data = ChecklistItem::create([
                'name' => $request->name,
                'checklist_id' => $checklist_id
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
     * Show checklist item
     * @param int $checklist_id
     * @param int $id
     *
     * @return Illuminate\Http\Response
     */
    public function show(int $checklist_id, int $id)
    {
        try {
            $data = ChecklistItem::where('checklist_id', $checklist_id)->where('id', $id)->first();
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
     * Update Checklsit ID checklist item
     * @param ChecklistStoreRequest $request
     *
     * @return Illuminate\Http\Response
     */
    public function update(int $checklist_id, int $id)
    {
        DB::beginTransaction();
        try {
            $data = ChecklistItem::find($id);
            $data->update([
                'checklist_id' => $checklist_id
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
     * Rename checklist item
     * @param ChecklistStoreRequest $request
     *
     * @return Illuminate\Http\Response
     */
    public function rename(ChecklistItemRequest $request, int $checklist_id, int $id)
    {
        DB::beginTransaction();
        try {
            $data = ChecklistItem::find($id);
            $data->update([
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
     * Delete checklist item
     * @param int $id
     *
     * @return Illuminate\Http\Response
     */
    public function destroy(int $checklist_id, int $id)
    {
        DB::beginTransaction();
        try {
            ChecklistItem::find($id)->delete();
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
