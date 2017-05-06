<?php

    require_once 'Notifier.php';
    
    
    class TextNotifier extends Notifier
    {
        public function inform($message)
        {
            print "Текстовий меседж: {$message}\n";
        }
    }