<?php
session_start();
if(!isset($_SESSION['student_username'])){
    header('Location:../../index.php?error_student=true');
}