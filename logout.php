<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: gradRoomFinal-guest.html"); // Redirecting To Home Page
}
?>