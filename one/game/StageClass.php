<?php 
require_once('SuperManClass.php');
require_once('BadManClass.php');
require_once('WeaponClass.php');
require_once('SkillClass.php');

/**
* 舞台类
*/
class Stage
{
	public $weapon_array = ['板砖', '斧子', '长剑', '榔头', '大刀', '三星note7'];
	public $attack_array = [80, 100, 150, 120, 110, 999];
	public $skill_array = ['技能一','技能二','技能三','技能四'];
	public $skill_attack_array = [10,20,30,40];

	public function showTime(SuperMan $superman, BadMan $badman)
	{
		echo "战斗开始<hr>";
		$flag = true;
		while($flag) {
			//每回合状态随机
			$rand_num1 = rand(1, 3);
			//生成随机武器
			$weapon1 = new Weapon();
			$rand_weapon1 = rand(0, 5);
			$weapon1->setWeaponName($this->weapon_array[$rand_weapon1]);
			$weapon1->setWeaponAttack($this->attack_array[$rand_weapon1]);
			//生成随机一种技能
			$skill1 = new Skill();
			$rand_skill1 = rand(0,3);
			$skill1->setSkillName($this->skill_array[$rand_skill1]);
			$skill1->setSkillAttack($this->skill_attack_array[$rand_skill1]);
			//生成第二种技能
			$skill2 = new Skill();
			$rand_skill2 = rand(0,3);
			$skill2->setSkillName($this->skill_array[$rand_skill2]);
			$skill2->setSkillAttack($this->skill_attack_array[$rand_skill2]);
			//生成第二把武器
			$weapon2 = new Weapon();
			$rand_weapon2 = rand(0, 5);
			$weapon2->setWeaponName($this->weapon_array[$rand_weapon2]);
			$weapon2->setWeaponAttack($this->attack_array[$rand_weapon2]);
			$rand_num2 = rand(1, 3);

			switch ($rand_num1) {
				case 1: {
					$badman->attack($superman);
					break;
				}
				case 2: {
					$badman->getWeapon($weapon1);
					break;
				}
				default:
					echo $badman->getSkill($skill1);
					break;
			}

			switch ($rand_num2) {
				case 1: {
					$superman->attack($badman);
					break;
				}
				case 2: {
					$superman->getWeapon($weapon2);
					break;
				}
				default:
					echo $superman->getSkill($skill2);
					break;
			}

			if ($badman->getHP() <= 0 || $superman->getHP() <= 0) {
				$flag = false;
				if ($badman->getHP() <= 0) {
					echo "<h1>". $superman->getName() ."获得了胜利！！！</h1>";
				} else
				    echo "<h1> ". $badman->getName() ."获得了胜利！！！</h1>";
			}
		}
	}
}