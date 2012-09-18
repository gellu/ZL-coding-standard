<?php
/**
 * Created by: gellu
 * Date: 18.09.2012 15:21
 */

/**
 * Test class for phpcs ZL coding standard
 */
class testClass
{

	/**
	 * @param int $paramA
	 * @param string $paramB
	 *
	 * @return bool
	 */
	public function testFunction($paramA, $paramB)
	{
		return true;
	}

}

/**
 * Test Model class for phpcs ZL coding standard
 */
class testModel
{
	public $user_id;

	/**
	 * @param int $userId
	 */
	function __construct($userId)
	{
		$this->user_id = $userId;
	}
}