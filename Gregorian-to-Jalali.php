// 1970/1/1 00:00:00 = 1348/10/11 00:00:00
    public function convertDate($date){
        $timeStamp = strtotime($date);
        $secondInOneDay = 24*60*60;
        $daysPassed = floor($timeStamp / $secondInOneDay)+1;
        $days = $daysPassed;
        $year = 1348;
        $month = 11;
        $day = 11;

        $days -= 19;
        $daysInMonth = [31,31,31,31,31,31,30,30,30,30,30,29];
        while (true){
            if ($days > $daysInMonth[$month-1]){
                $days -= $daysInMonth[$month-1];
                $month++;
                if ($month == 13){
                    $year++;
                    if (($year - 1347)%4 == 0){
                        $days--;
                    }
                    $month = 1;
                }
            }else{
                break;
            }
        }
        echo "$year - $month - $days";
    }