<?php 

class myCest
{

    // tests
    public function tryToTest(FunctionalTester $I)
    {
		$I->amOnPage('post/index.php');
        $I->see('Post, h1');
    }
}
