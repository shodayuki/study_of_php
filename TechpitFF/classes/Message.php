<?php
class Message
{
    public function displayStatusMessage($objects)
    {
        foreach ($objects as $object) {
            echo $object->getName() . "　：　" . $object->getHitPoint() . "/" . $object::MAX_HITPOINT . "\n";
        }
        echo "\n";
    }

    public function displayAttackMessage($objects, $targets)
    {
        foreach ($objects as $object) {
            // 白魔道士の場合、味方のオブジェクトも渡す
            if (get_class($object) === "WhiteMage") {
                $attackResult = $object->doAttackWhiteMage($targets, $objects);
            } else {
                $attackResult = $object->doAttack($targets);
            }
            if ($attackResult) {
                echo "\n";
            }
            $attackResult = false;
        }
        echo "\n";
    }
}