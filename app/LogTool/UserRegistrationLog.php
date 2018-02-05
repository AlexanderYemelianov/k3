<?php

namespace App\LogTool;

use App\RegistrationLogs;

class UserRegistrationLog
{
    protected $userID;
    protected $regTime;

    /**
     * Initiate class params. Then call methods logToFile() and logToDB()
     * @param int $id
     * @param string $time Y-m-d H:m:s
    */
    function __construct($id, $time)
    {
        $this->userID = $id;
        $this->regTime = $time;

        $this->logToDB();
        $this->logToFile();
    }

    /**
     * Add userID and registrationTime to log file /storage/logs/registration.log
     */
    private function logToFile()
    {
        $content = 'Time: ' . $this->regTime . ' User ID: ' . $this->userID  . "\n";
        $fp = fopen($_SERVER['DOCUMENT_ROOT'] . "/../storage/logs/registration.log","a");
        fwrite($fp, $content);
        fclose($fp);
    }

    /**
     * Add userID and registrationTime to DB
     */
    private function logToDB()
    {
        RegistrationLogs::create([
            'user_id' => $this->userID,
            'registration_time' => $this->regTime,
        ]);
    }

}