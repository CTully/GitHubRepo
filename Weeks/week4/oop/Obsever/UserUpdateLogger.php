<?php
/*
*Class: UserUpdateLogger
*Purpose: Used to log the note that the user has been updated
*/
class UserUpdateLogger implements SplObserver
{
    /**Name: update()
     * Purpose:Log the fact that a user has been updated
     *return: n/a
     * Accepts:SplSubject $subject
     */
    public function update(SplSubject $subject)
    {
        echo 'Updated: ' . $subject->getCurrent() . "\n";
    }
}