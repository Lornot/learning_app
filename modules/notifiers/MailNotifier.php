<?php

    require_once 'Notifier.php';

    class MailNotifier extends Notifier
    {
        public function inform($message)
        {
            print "Меседж через емейл: {$message}\n";
        }
    }