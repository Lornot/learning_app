<?php

    require_once 'TextNotifier.php';
    require_once 'MailNotifier.php';

    abstract class Notifier
    {
        static function getNotifier()
        {
            // Створюємо клас залежно від конфігу чи ще чогось

            if (rand(1,2) === 1) {
                return new MailNotifier();
            } else {
                return new TextNotifier();
            }
        }
    }