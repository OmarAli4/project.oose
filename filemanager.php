<?php
class actdetails
{
  public $id;
  public $userid;
  public $actid;
  public $starttime;
  public $quality;
  public $filemanagerobj;
  function __construct()
  {
    $this->filemanagerobj=new filemanager();
    $this->filemanagerobj->filename="actdetails.txt";
    $this->filemanagerobj->s="~";
  }
  function getactdetailsfromfilebyid($id)
  {
    //echo $id;
    $s=new actdetails();
    $array=$this->filemanagerobj->explode_record($id);
    if($array[0]!="")
    {
    $s->id=$array[0];
    $s->userid=$array[1];
    $s->actid=$array[2];
    $s->starttime=$array[3];
    $s->quality=$array[4];
    }
    return $s;
  }
  
  function listallactdetails()
  {
    $myreturn=array();
    $myfile=fopen($this->filemanagerobj->filename,'r+')or die("unable to get file");
    $i=0;
    while(!feof($myfile))
    {
      $line=fgets($myfile);//get line
      $arrayline=explode($this->filemanagerobj->s,$line);//spilit
      $myreturn[$i]=$this->getactdetailsfromfilebyid($arrayline[0]);
      $i++;
    }
    fclose($myfile);
    return $myreturn;
  }
}
class act
{
  public $id;
  public $actname;
  public $acttime;
  public $filemanagerobj;
  public $arrayactdetail;
  function __construct()
  {
    $this->filemanagerobj=new filemanager();
    $this->filemanagerobj->filename="act.txt";
    $this->filemanagerobj->s="~";
    $this->arrayactdetail=[];
  }
  function listallact()
  {
    $myreturn=array();
    $myfile=fopen($this->filemanagerobj->filename,'r+')or die("unable to get file");
    $i=0;
    while(!feof($myfile))
    {
      $line=fgets($myfile);//get line
      if($line!="")
      {
      $arrayline=explode($this->filemanagerobj->s,$line);//spilit
      $myreturn[$i]=$this->getactfromfilebyid($arrayline[0]);
      $i++;
      }
    }
    fclose($myfile);
    return $myreturn;
  }
  function storeact()
  {
      $id=$this->filemanagerobj->getlastid()+1;
      $record=$id."~".$this->actname."~".$this->actime;
      $this->filemanagerobj->storerecodinfile($record);
  }
  function getactfromfilebyid($id)
  {
    $s=new act();
    $arraline=$this->filemanagerobj->explode_record($id);
    if($arraline[0]!="")
    {
    $s->id=$arraline[0];
    $s->actname=$arraline[1];
    $s->actime=$arraline[2];
    }
    $objactdetails=new actdetails();
    $array=[];
    $k=0;
    $array=$objactdetails->listallactdetails();
    //echo $array[3]->actid;
    for($i=0;$i<count($array);$i++)
    {
      if($array[$i]->actid==$s->id)
      {
        $s->arrayactdetail[$k]=$array[$i];
        $k++;
      }
    }
    return $s;
  }
  function delact($id)
  {
    $record=$this->filemanagerobj->getlinebyid($id);
    $this->filemanagerobj->delrecord($record);

  }
}
class filemanager
{
  public $filename;
  public $s;
  function delrecord($record)
  {
     $contents=file_get_contents($this->filename);
     $contents=str_replace($record,"",$contents);
     file_put_contents($this->filename,$contents);
    
  }
  function editerecord($record)
  {
  $arr=[];
  $arr=explode($this->s,$record);
  return $arr;
  }
  function editerecord2($oldrecord,$newrecord)
{
  $contents=file_get_contents($this->filename);
  $contents=str_replace($oldrecord,$newrecord,$contents);
  file_Put_contents($this->filename,$contents);
}
  function storerecodinfile($record)
  {
    $myfile=fopen($this->filename,'a+');
    fwrite($myfile,$record."\r\n");
    fclose($myfile);
  }

  function getlinebyid($id)
  {
    if(!file_exists($this->filename))
    {
      return 0;
    }
    $myfile=fopen($this->filename,'r+') or die ("unable");
    while(!feof($myfile))
    {
      $line=fgets($myfile);//get line
      $arrayline=explode($this->s,$line);//spilit
      if($arrayline[0]==$id)
      {
          return $line;
        //echo $lastid. "<br>";
      }

    }
  }
  function explode_record($id)
  {
    $record=$this->getlinebyid($id);
    $arraline=explode($this->s,$record);
    //echo $arraline[0]."<br>";
    return $arraline;
  }
  function getlastid2($filemangerobj)
{
  $lastid=0;
  $f=0;
  $myfile= fopen($this->filename,"r+") or die("Unable to open file!");
  while(!feof($myfile))
  {
    $line=fgets($myfile);
    $Arrayline=explode("~",$line);
    if($Arrayline[0]!="")
    {
      $f=1;
      $lastid=$Arrayline[0];
    }
  }
  fclose($myfile);
  return$lastid;
}
  function getlastid()
  {
    if(!file_exists($this->filename))
    {
      return 0;
    }
    $myfile=fopen($this->filename,'r+') or die ("unable");
    $lastid=0;
    while(!feof($myfile))
    {
      $line=fgets($myfile);//get line
      $arrayline=explode($this->s,$line);//spilit
      if($arrayline[0]!="")
      {
        $lastid=$arrayline[0];
        //echo $lastid. "<br>";
      }

    }
    fclose($myfile);
      return $lastid;
    }
  function drawtable()
  {
    $myfile=fopen($this->filename,'r+')or die("unable to get file");
    while(!feof($myfile))
    {
      $line=fgets($myfile);//get line
      echo "<tr>";
      $arrayline=explode($this->s,$line);//spilit
      for($i=0;$i<count($arrayline);$i++)
      {
          echo"<td>". $arrayline[$i]."</td>";
      }
      echo "</tr>";
    }
    fclose($myfile);
  }
}

//echo $objt->arrayactdetail[0]->quality;
?>
