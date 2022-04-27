<?php
//error_reporting(0);
class actditels
{
  public$idd;
  public$userid;
  public$actid;
  public$time;
  public$stars;

  function __construct()
  {
    $this->filemangerobj=new filemanger();
    $this->filemangerobj->filename="actdatils.txt";
    $this->filemangerobj->separator="~";
  }
  function getactditisbyid($id)
  {
    $r=new actditels();
    $record=$this->filemangerobj->getlinewithid($id);
      $Arrayline=explode($this->filemangerobj->separator,$record);
      $r->idd=$Arrayline[0];
      $r->userid=$Arrayline[1];
      $r->actid=$Arrayline[2];
      $r->time=$Arrayline[3];
      $r->stars=$Arrayline[3];
      return $r;
  }
}
class act
{
  public $id;
  public $actname;
  public $acttime;
  public $filemangerobj;

  function __construct()
  {
    $this->filemangerobj=new filemanger();
    $this->filemangerobj->filename="act.txt";
    $this->filemangerobj->separator="~";
  }
  function editeact($id)
  {
    $s=new act();
    $record=$s->filemangerobj->getlinewithid($id);
    $arr=$s->filemangerobj->editerecord($record);
    return $arr;
    
  }
  function storact()
  {
    $id=$this->filemangerobj->getlastid($this->filemangerobj)+1;
    $record=$id.$this->filemangerobj->separator.$this->actname.$this->filemangerobj->separator.$this->acttime;
    $this->filemangerobj->storrecord($record);
  }
  function getactfromfilebyid($id)
  {
     $r=new act();
     $record=$this->filemangerobj->getlinewithid($id);
       $Arrayline=explode($this->filemangerobj->separator,$record);
       $r->id=$Arrayline[0];
       $r->actname=$Arrayline[1];
       $r->acttime=$Arrayline[2];
       return $r;
  }
  function listallact()
    {
    $myreturn=[];
    $i=0;
    $myfile= fopen($this->filemangerobj-> filename,"r+") or die("Unable to open file!");
    while(!feof($myfile))
    {
      $line=fgets($myfile);
      if($line!="")
      {
      $Arrayline=explode($this->filemangerobj->separator,$line);
        $myreturn[$i]=$this->getactfromfilebyid($Arrayline[0]);
      }
        $i++;
    }
    fclose($myfile);
    return $myreturn;
    }  
    function listpatient()
    {
      $myreturn=[];
      $i=0;
      $myfile= fopen($this->filemangerobj-> filename,"r+") or die("Unable to open file!");
      while(!feof($myfile))
     {
      $line=fgets($myfile);
      if($line!="")
      {
        $Arrayline=explode($this->filemangerobj->separator,$line);
        if($Arrayline[0]>900)
        {
         $myreturn[$i]=$this->getactfromfilebyid($Arrayline[0]);
         $i++;
        }
      }
     }
    fclose($myfile);
    return $myreturn;
    }
   function deleteact($id)
   {
      $record=$this->filemangerobj->getlinewithid($id);
      $this->filemangerobj->deleterecord($record);
   }
   
}

class filemanger
{
  public $filename;
  public $separator;

function storrecord($record)
{
  $myfile=fopen($this->filename,"a+");
  fwrite($myfile,$record."\r\n");
  fclose($myfile);
}
function editerecord($record)
{
  $arr=[];
  $arr=explode($this->separator,$record);
  return $arr;
}
function getnamebyid($id,$filetxt)
{
  $myfile= fopen($filetxt,"r+") or die("Unable to open file!");
  while(!feof($myfile))
  {
    $line=fgets($myfile);
    $Arrayline=explode($this->separator,$line);
    if($Arrayline[0]==$id)
    {
      $name=$Arrayline[1];
      return$name;
    }
  }
  return "1";
}
function deleterecord($record)
{
  $contents=file_get_contents($this->filename);
  $contents=str_replace($record,'',$contents);
  file_Put_contents($this->filename,$contents);
}
function editerecord2($oldrecord,$newrecord)
{
  $contents=file_get_contents($this->filename);
  $contents=str_replace($oldrecord,$newrecord,$contents);
  file_Put_contents($this->filename,$contents);
}
function drawt()
{
  $myfile= fopen($this->filename,"r+") or die("Unable to open file!");
  while(!feof($myfile))
  {
    $line=fgets($myfile);
    echo"<tr>";
    $Arrayline=explode($this->separator,$line);
    for($i=0;$i<count($Arrayline);$i++)
    {
        echo "<td>".$Arrayline[$i]."</td>";
    }
    echo"</tr>";
  }
  fclose($myfile);
}
function getlinewithid($id)
{
  $myfile= fopen($this->filename,"r+") or die("Unable to open file!");
  while(!feof($myfile))
  {
    $line=fgets($myfile);
    $Arrayline=explode($this->separator,$line);
    if($Arrayline[0]==$id)
    {
      return$line;
    }
  }
  return "";
}
function getlastid($filemangerobj)
{
  $lastid=0;
  $f=0;
  $myfile= fopen($this->filename,"r+") or die("Unable to open file!");
  while(!feof($myfile))
  {
    $line=fgets($myfile);
    $Arrayline=explode($this->separator,$line);
    if($Arrayline[0]!="")
    {
      $f=1;
      $lastid=$Arrayline[0];
    }
  }
  fclose($myfile);
  return$lastid;
}
}
 ?>
