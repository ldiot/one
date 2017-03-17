<?php 
require_once('ManClass.php');
require_once('WeaponClass.php');
require_once('SkillClass.php');

class BadMan extends Man
{
	public function __construct($_name, $_hp, $_attack, $_avoi)
	{
		$this->name = $_name;
		$this->HP = $_hp;
		$this->attack = $_attack;
		$this->avoidance = $_avoi;
	}

	public function attack(Man $superman)
	{
		echo $this->name . " 发起了攻击<hr>";
		$superman->setHP($this->attack);
	}

	public function setHP($attack)
	{
		$rand_num = rand(0, 100);
		if ($rand_num < $this->avoidance) {
			echo $this->name . "躲避了攻击<hr>";
		} else {
			$this->HP -= $attack;
			echo $this->name . "血量减少了 " . $attack . "<br>";
            echo $this->name . "还有 " . $this->HP . " 点生命值<hr>";
		}
	}

	public function getName()
	{
		return $this->name;
	}

	public function getHP()
	{
		return $this->HP;
	}

	public function getWeapon(Weapon $weapon)
	{
		$this->attack += $weapon->getWeaponAttack();
		echo $this->name . "获得了武器 ：" . $weapon->getWeaponName() . ",攻击力增加了 " . $weapon->getWeaponAttack() . " 点<hr>";
	}

	public function getSkill(Skill $skill)
	{
        $this->attack += $skill->getSkillAttack();
        echo $this->name . "获得了武器 ：" . $skill->getSkillName().",攻击力增加了 " . $skill->getSkillAttack() . " 点<hr>";
	}
}