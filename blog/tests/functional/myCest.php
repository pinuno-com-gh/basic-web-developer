<?php 

class myCest
{

    // tests
    public function TestingDefaultPage(FunctionalTester $I)
    {
		$I->amOnPage('post/index.php');
    }
}
