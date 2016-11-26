<?php require('simple_html_dom.php');
class Cryptor
{
 
    public $oldCode;
	public $newCode;
    private $target_dir;
    private $target_file;
    private $target;
 
    public function __construct($targetDir, $targetFile)
    {
        $this->target_dir   = $targetDir;
        $this->target_file  = $targetFile;

        $this->target       = $targetDir . $targetFile;
    }
	
	public function getNewCode()
	{
		return $this->newCode;
	}
	
	public function setNewCode($newCode)
    {
        $this->newCode = $newCode;
    }
 
    public function getOldCode()
    {
        return $this->oldCode;
    }
 
    public function setOldCode($oldCode)
    {
        $this->oldCode = $oldCode;
    }
 
    public function getTargetDir()
    {
        return $this->target_dir;
    }

    public function setTargetDir($target_dir)
    {
        $this->target_dir = $target_dir;
    }
 
    public function getTargetFile()
    {
        return $this->target_file;
    }
 
    public function setTargetFile($target_file)
    {
        $this->target_file = $target_file;
    }
 
    public function getTarget()
    {
        return $this->target;
    }
 
    public function setTarget($target)
    {
        $this->target = $target;
    }
	
	public function String2Hex($string) 
	{
		$store='';
		for ($i=0; $i < strlen($string); $i++) {
		$store .= '%' . bin2hex($string[$i]);
      }	return $store;
	}
	
	public function cryptHtml() 
	{
		$code=$this->getTarget();
		$getCode=file_get_html($code);
		$this->setOldCode($getCode);
		$code=$this->getOldCode();
		$crypted=$this->String2Hex('document.write(\'' . (string)$getCode . '\');');
		$this->setNewCode($crypted);
		$final="<!DOCTYPE html><html>\n<head>\n</head>\n<body>\n<script type=\"text/javascript\">\n//<!-- Protected By HML -->\neval(unescape(\"" . $this->newCode . "\"));\n // <!-- Protected By HML -->\n</script>\n<noscript>Error : Your browser does not have javascript enabled.</noscript>\n</body>\n</html>";
		return $final;
	}
}
$mainC = new Cryptor('','index.html');
echo $mainC->cryptHtml();







?>



































