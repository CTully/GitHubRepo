<?php

/*
* Class:Users
*Purpose: for usage of tracking if a 'user' has information that is changed and to notify said user.
*/

class Users implements SplSubject
{
    private
        $_users,
        $_observers,
        $_currentUser;

	/*
	*Name:__construct()
	*Accepts: An array of users
	*returns: N/A
	*/
		
    public function __construct(array $users)
    {
        $this->_users = $users;
        $this->_observers = array();
    }

    /**Name:updateUsers
     * Accepts: N/A
	 *Returns:N/A
	 *Purpose:Updates the users
     */
    public function updateUsers()
    {
        foreach ($this->_users as $user)
        {
            $this->_currentUser = $user;

            //Do update

            $this->notify();
        }
        $this->_currentUser = null;
    }

    /**Name:getCurrent:
     *Accepts:N/A
     * @return $user
	 *purpose: returns the item currently being updated
     */
    public function getCurrent()
    {
        return $this->_currentUser;
    }

    /**Name:Attach()
	*accepts: splObserver
     * Purpose:Attach an observer
     *returns: N/A    
     */
    public function attach(SplObserver $observer)
    {
        array_push($this->_observers, $observer);
    }

    /**Name: detach()
     * Purpose:Detach an observer
     * return:N/A
     * Accepts: SplObserver $observer
     */
    public function detach(SplObserver $observer)
    {
        foreach ($this->_observers as $key => $item)
        {
            if ($observer == $item) {
                unset($this->_observers[$key]);
            }
        }
    }

    /**Name:notify()
     * Purpose: Send notification to all observers
	 returns: N/A
     */
    public function notify()
    {
        foreach ($this->_observers as $key => $item) {
            $item->update($this);
        }
    }
}