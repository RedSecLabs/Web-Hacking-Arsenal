<!-- page # 247,248 -->

<?php
define("CMD", "uname -a");
$list = array(
    "exec",
    "passthru",
    "shell_exec",
    "system",
    "popen",
    "proc_open",
    "eval",
    "assert",
    "pcntl_exec",
    "backticks",
    "expect_popen",
    "expect_expectl"
);

$flag = false;
echo "<h2>Enabled Functions on the Web Server</h2>";
foreach ($list as $func) {
    if (function_exists($func)) {
        $flag = true;   
        echo "<b>$func:</b>";;   
        echo "<pre>";   
        switch ($func) {
                case "popen":      
                    $hWnd = $func(CMD, 'r');
                    $output = fread($hWnd, 4096);     
                    echo $output;     
                    pclose($hWnd);     
                    break;    
                    case "proc_open":     
                        $descriptorspec = array(      
                            0 => array("pipe", "r"),      
                            1 => array("pipe", "w"),       
                            2 => array("file", "/tmp/error-output.txt", "a")    
                    ) ;      
                    $process  =  $func(CMD,  $descriptor-spec, $pipes);    
                    if (is_resource($process)) {
                        fclose($pipes[0]);      
                        echo stream_get_contents($pipes [1]);     
                        fclose($pipes[1]);
                        proc_close($process);    
                    }    
                    break;    
                    default:     
                        echo $func(CMD);     
                        break;    
                }   
                echo "</pre>";   
                echo "<br/>";
        }
}
if ($flag == false){
    echo  "<b>No  functions  were  enabled  to  execute  commands.</b>";
}
                
                
?>