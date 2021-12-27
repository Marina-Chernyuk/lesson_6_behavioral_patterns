<?php

class UserObserver implements SplObserver
{
    public function update(SplSubject $subject)
    {
        echo 'Reading the vacancy...';
    }
}
