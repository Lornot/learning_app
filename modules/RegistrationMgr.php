<?php

    require_once 'lessons/Lesson.php';
    require_once 'notifiers/Notifier.php';

    class RegistrationMgr
    {
        function register(Lesson $lesson)
        {
            // Щось робимо з обєктом Lesson
    
            // Розсилаєм повідомлення
            $notifier = Notifier::getNotifier();
            $notifier->inform("Нове заняття: вартість ({$lesson->cost()})");
        }
    }