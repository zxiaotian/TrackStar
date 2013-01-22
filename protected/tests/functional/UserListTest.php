<?php

class UserListTest extends WebTestCase
{
	public $fixtures=array(
		'userLists'=>'UserList',
	);

	public function testShow()
	{
		$this->open('?r=userList/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=userList/create');
	}

	public function testUpdate()
	{
		$this->open('?r=userList/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=userList/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=userList/index');
	}

	public function testAdmin()
	{
		$this->open('?r=userList/admin');
	}
}
