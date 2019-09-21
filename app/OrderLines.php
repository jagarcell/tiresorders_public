<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class OrderLines extends Model
{
    //
    public function getOrderLinesByOrderId($orderId)
    {
    	# code...
    	return $this->where('order_id', $orderId)->get();
    }

    public function findLineByQbItemId($orderId, $qbItemId)
    {
    	# code...
    	return $this->where('order_id', $orderId)->where('item_qbid', $qbItemId)->get();
    }

    public function deleteLineByQbItemIdAndOrderId($qbItemId, $orderId)
    {
        try {
            $deletedLine = $this->where('item_qbid', $qbItemId)->where('order_id', $orderId)->delete();
            if(!is_null($deletedLine) && $deletedLine > 0){
                return ['status' => 'success', 'qbitemid' => $qbItemId];
            }
            else{
                return ['status' => 'failed'];
            }
        } catch (\Exception $e) {
            return ['status' => 'failed'];
        }
    }

    public function findLineById($lineId)
    {
        $lines = $this->where('id', $lineId)->get();
        if(count($lines) > 0){
            return $lines[0];
        }
        else{
            return null;
        }
    }

    public function DeleteLineById($lineId)
    {
        # code...
        $this->where('id', $lineId)->delete();
        return;
    }
}
