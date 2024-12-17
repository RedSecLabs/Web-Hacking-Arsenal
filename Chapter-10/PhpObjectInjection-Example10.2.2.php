<!-- page # 376 -->


<?php
class FileCreator
{
    private $filename;
    private $fileData;
    public function __construct($filename, $fileData)
    {
        $this->filename = $filename;  
        $this->fileData = $fileData;    
        $unserializedData = unserialize($this->fileData);  
        f i l e _ p u t _ c o n t e n t s ( $ t h i s - > f i l e n a m e , 
        $unserializedData);
        echo "File created: $this->filename";
    } 
}
// Check if filename and fileData are provided
if (isset($_GET['filename']) && isset($_GET['fileData'])) {
    $filename = $_GET['filename'];
    $fileData = $_GET['fileData'];
    // Create a FileCreator object
    $fileCreator = new FileCreator($filename, $fileData);
}
?>