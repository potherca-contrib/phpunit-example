<?php
/**
 * @coversDefaultClass User
 * @covers ::<!public>
 */
class UserTest extends PHPUnit_Framework_TestCase
{
    /** @var User */
    protected $user = null;

    /**
     * Make an instance of the user for each test to use
     */
    public function setUp()
    {
        $this->user = new User();
    }
    
    /** 
     * @test 
     * @covers ::talk
     */
    public function userShouldRespondWhenAskedToTalk() {

        $user = $this->user;
        
        $expected = "Hello world!";
        $actual = $user->talk();
        
        // use assertEquals to ensure the greeting is what you expect
        $this->assertEquals($expected, $actual);
    }
}
