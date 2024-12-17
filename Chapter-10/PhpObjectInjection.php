<!-- page # 375 -->

<?php
class CallOfDutyGame {
    public $playerName = 'tmgm';
    public $health = 100;
    public $ammo = 200;
    public $level = 'Level10';
    public $progress = 'Checkpoint1';
    }

    // Create a new CallOfDutyGame object
    $codGame = new CallOfDutyGame();
    // Serialize the object
    $serializedCodGame = serialize($codGame);
    // Output the serialized string
    echo $serializedCodGame;
?>