<?php 


class Calendr {
private $month,
				$year,
				$days_of_week,
				$num_days,
				$date_info,
				$day_of_week;

				
	public function __construct($month, $year, $days_of_week = array('Po','Ut','St','Čt','Pá','So','Ne')){
		$this->month= $month;
		$this->year= $year;
		$this->days_of_week= $days_of_week;
		$this->num_days= cal_days_in_month(CAL_GREGORIAN, $this->month, $this->year);
		$this->date_info= getdate(strtotime('first day of ', mktime(0,0,0,$this->month,1,$this->year)));
		$this->day_of_week= $this->date_info['wday'];
	}
	
	public function show(){//month and year caption
	    
		$output = "<table class='calendar'>";
		$output .= "<tr>";
		
		//Days of the week header
		foreach($this->days_of_week as $day){
			$output .= '<th class="wday">' . $day. "</th>";
		}
		$output .='</tr><tr>';
		if($this->day_of_week > 0) {
			$output .= '<td colspan="'. $this->day_of_week.'"></td>';
		}
		$current_day = 1;
		
		
		while($current_day <= $this->num_days){
			if($this->day_of_week == 7){
				$this->day_of_week = 0;
				$output .= '</tr><tr>';
			}
			$output .= '<td class="day">'. $current_day. '</td>';
			$current_day++;
			$this->day_of_week++;
		}
		if($this->day_of_week != 7){
			$remaining_days = 7 - $this->day_of_week;
			$output .= '<td colspan"'. $remaining_days.'"></td>';;
		}
		
		$output .='</tr>';
		$output .= '</table>';
		echo $output;
	}
	
	private function month($month){
		switch ($month){
			case 'January':
				$month = 'Leden';
				break;
			case 'February':
				$month = 'Únor';
				break;
			case 'March':
				$month = 'Březen';
				break;
			case 'April':
				$month = 'Duben';
				break;
			case 'May':
				$month = 'Květen';
				break;
			case 'June':
				$month = 'Červen';
				break;
			case 'July':
				$month = 'Červenec';
				break;
			case 'August':
				$month = 'Srpen';
				break;
			case 'September':
				$month = 'Září­';
				break;
			case 'October':
				$month = 'Říjen';
				break;
			case 'November':
				$month = 'Listopad';
				break;
			case 'December':
				$month = 'Prosinec';
				break;
			default:
				return "tak seš kokot?";
		}
		return $month;
	}
}
?>







