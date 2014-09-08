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
     * Calling a function without a required parameter will trigger an error
     * we can check for this behaviour by mentioning the Exception we are 
     * expecting to be triggered by this test using the @expectedException 
     * annotation.
     *
     * @test 
     *
     * @covers ::setName
     *
     * @expectedException PHPUnit_Framework_Error_Warning
     */
    public function userShouldOnlyAcceptValuesAsName() {
        $user = $this->user;

        $user->setName();        
    }
    
    /**
     * @test 
     * @covers ::getName     
     */
    public function userShouldOnlyHaveNameAfterGivenName() {
        $user = $this->user;

        $actual = $user->getName();        

        $this->assertNull($actual);
    }    
    
    /**
     * @test 
     *
     * @covers ::setName
     * @covers ::getName
     *
     * @dataProvider providerOfNames
     */
    public function userShouldRememberNameWhenGivenName($name) {
        
        $user = $this->user;
        
        $user->setName($name);
        
        $expected = $name;
        $actual = $user->getName($name);
        
        $this->assertEquals($expected, $actual);
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
    
    public function providerOfNames() {
        return array(
            array('Ben'),
            array('Pieter Joost'),
        );
    }
}

