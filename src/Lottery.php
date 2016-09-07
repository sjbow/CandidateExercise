<?php

namespace Exads;

use Carbon\Carbon;

class Lottery{

	public function whenIsNextLottery($date = null){

		if($date == null){
			$now = Carbon::now();
			if(($now->isWednesday() || $now->isSaturday() )&& $now->hour < 20) {
				return "Today at 8pm";
			}elseif ($now->isSaturday() || $now->dayOfWeek < Carbon::WEDNESDAY || $now->dayOfWeek > Carbon::SATURDAY){
				return "Wednesday " .Carbon::parse('next wednesday')->toFormattedDateString(). " at 8pm";
			} elseif ($now->isWednesday() || $now->dayOfWeek < Carbon::SATURDAY && $now->dayOfWeek > Carbon::WEDNESDAY){
				return "Saturday " . Carbon::parse('next saturday')->toFormattedDateString(). " at 8pm";
			}
		} else{
			$now = Carbon::createFromFormat('Y-m-d H:i:s', $date);
			if($now->isWednesday() || $now->isSaturday() && $now->hour < 20) {
				return $now->toFormattedDateString();
			}elseif ($now->isSaturday() || $now->dayOfWeek < Carbon::WEDNESDAY || $now->dayOfWeek > Carbon::SATURDAY){
				$now->modify('next wednesday');
				return "Wednesday " .$now->toFormattedDateString(). " at 8pm";
			}elseif ($now->isWednesday() || $now->dayOfWeek < Carbon::SATURDAY && $now->dayOfWeek > Carbon::WEDNESDAY){
				$now->modify('next saturday');
				return "Saturday " .$now->toFormattedDateString(). " at 8pm";
			}
		}

	}

}