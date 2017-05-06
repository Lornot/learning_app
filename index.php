<?php

    require_once 'modules/RegistrationMgr.php';
    require_once 'modules/lessons/Lecture.php';
    require_once 'modules/lessons/Seminar.php';
    require_once 'modules/costs_strategies/TimedCostStrategy.php';
    require_once 'modules/costs_strategies/FixedCostStrategy.php';


    $lessons[] = new Seminar(4, new TimedCostStrategy());
    $lessons[] = new Seminar(4, new FixedCostStrategy());

    $RegistrationMgr = new RegistrationMgr();

    foreach ($lessons as $lesson) {
        print_r("Плата за заняття {$lesson->cost()}<br>");
        print_r("Тип оплати: {$lesson->chargeType()}<br>");

        $RegistrationMgr->register($lesson);

        print_r("<br><hr>");
    }