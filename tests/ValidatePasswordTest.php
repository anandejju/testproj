<?php
class ValidatePasswordTest extends \PHPUnit\Framework\TestCase {
	public function testValidLength(){
		$valPass = new ValidatePassword();
		$this->assertFalse($valPass->validLength('1234'));
	}
}
?>