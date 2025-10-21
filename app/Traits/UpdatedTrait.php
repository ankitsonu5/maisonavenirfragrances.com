<?php

namespace App\Traits;

use Illuminate\Http\Request;

trait UpdatedTrait
{
    public function updateStatus(Request $request, $id)
    {
        if ($request->ajax() && $request->isMethod('PATCH')) {
            $center = $this->model::find($id);
            if ($center->update(['status' => $request->status])) {
                $status = $request->status == 1 ? 'enabled' : 'disabled';
                return response()->json(['status' => 'success', 'message' => "Status $status successfully."]);
            }
        }
    }

    public function updateOrder(Request $request)
    {
        $Order = $request->input('order');
        foreach ($Order as $index => $orderId) {
            $this->model::where('id', $orderId)->update(['order' => $index]);
        }
        return response()->json(['message' => 'Order updated successfully']);
    }
}
