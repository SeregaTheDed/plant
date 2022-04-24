<?php
class EventCreater
{
    public static function CreateEventFromEmail($email)
    {
        require_once ('Database.php');
        require_once ('MyPrint.php');
        $db = new Database();
        $prev = $db->prepare("SELECT * FROM your_plants WHERE email = ?");
        $prev->bind_param('s',$email);
        $prev->execute();
        $res = $prev->get_result();
        $events = array();
        foreach ($res as $value)
        {
            $name = $value['name'];
            $interval = $value['watering_interval'];
            for ($i = 1; $i <= 100; $i++)
            {
                $new_date = date_create($value['planting_date'])->add(new DateInterval("P".($interval*$i)."D"));
                if (new DateTime(date("Y-m-d"))  > $new_date)
                    continue;
                //var_dump(date("Y-m-d"));
                $date = $new_date->format('d.m.Y');
                $events[$date] = "Полить $name";
            }
        }
        //MyPrint::PrintBeutiful($events);
        return $events;
    }
}