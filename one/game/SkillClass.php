<?php
class Skill
{
	private $skill_name;
	private $skill_attack;

	public function setSkillName($skill_name)
	{
		$this->skill_name = $skill_name;
	}

	public function getSkillName()
	{
		return $this->skill_attack;
	}

    public function setSkillAttack($skill_attack)
    {
    	$this->skill_attack = $skill_attack;
    }

    public function getSkillAttack()
    {
    	return $this->skill_attack;
    }
}