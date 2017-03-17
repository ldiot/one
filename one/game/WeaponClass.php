<?php
class Weapon
{
	private $weapon_name;
	private $attack;

	public function setWeaponName($name)
	{
		$this->weapon_name = $name;
	}

	public function getWeaponName()
	{
		return $this->weapon_name;
	}

	public function setWeaponAttack($attack)
	{
		$this->attack = $attack;
	}

	public function getWeaponAttack()
	{
		return $this->attack;
	}
}