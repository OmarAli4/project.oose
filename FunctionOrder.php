<?php
    class Order
    {
        Private $OrderID;
        Private $PatientID;
        Private $DoctorID;
        Private $TypeID;
        Public $FileManagerObj;
        function __construct()
        {
            $this->FileManagerObj=new FileManager();
            $this->FileManagerObj->FileName="TextFiles//Order.txt";
            $this->FileManagerObj->seperator="~";
        }
        function Set_Patient_Id($Id)
        {
            if($Id>0)
            {
                $PatientID=$Id;
            }
        }
        function Get_Patient_Id($Id)
        {
            if($Id>0)
            {
               return $Id;
            }
        }
        function Set_Order_Id($Id)
        {
            if($Id>0)
            {
                $OrderID=$Id;
            }
        }
        function Get_Order_Id($Id)
        {
            if($Id>0)
            {
               return $Id;
            }
        }
        function Set_Doctor_Id($Id)
        {
            if($Id>0)
            {
                $DoctorID=$Id;
            }
        }
        function Get_Doctor_Id($Id)
        {
            if($Id>0)
            {
               return $Id;
            }
        }
        function Set_Type_Id($Id)
        {
            if($Id>0)
            {
                $TypeID=$Id;
            }
        }
        function Get_Type_Id($Id)
        {
            if($Id>0)
            {
               return $Id;
            }
        }
        function StoreOrders()
        {
            $ID = $this->FileManagerobj->GetLastID($this->FileManagerobj->seperator)+1;
            $record=$ID."~".$this->PatientID."~".$this->DoctorID."~".$this->TypeID;
            $this->FileManagerobj->StoreRecordInFile($record);
        }
        function GetOrderFromFileById($Id)
        {
            $r=new Order();
            $record=$this->FileManagerobj->GetLineWithID($Id);
            $arrayLine=explode($this->FileManagerobj->seperator,$record);
            $r->OrderID=$arrayLine[0];
            $r->PatientID=$arrayLine[1];
            $r->DoctorID=$arrayLine[2];
            $r->TypeID=$arrayLine[3];
            return $r;
        }
        function ListOrders()
        {
            $MyReturn=array();
            $MyFile = fopen($this->FileManagerobj->FileName, "r+") or die("Unable to open file!");
            $i=0;
            while(!feof($MyFile))
            {
                $line=fgets($MyFile);
                $arrayLine=explode($this->FileManagerobj->seperator,$line);
                $MyReturn[$i]=$this->GetUserFromFileById($arrayLine[0]);
                $i++;
            }
            fclose($MyFile);
            return $MyReturn;
        }
        function DeleteOrder($Id)
        {
            $record=$this->FileManagerobj->GetLineWithID($Id);
            $this->FileManagerobj->DeleteRecordFromFile($record);
        }
        function EditOrder($Id,$newrecord)
        {
            $record=$this->FileManagerobj->GetLineWithID($Id);
            $this->FileManagerobj->EditRecordFromFile($record,$newrecord);
        }
    }
class FileManager
{
    public $FileName;
    public $seperator;
    function EditRecordFromFile($oldrecord,$newrecord)
    {
        $contents=file_get_contents($this->FileName);
        $contents=str_replace($oldrecord,$newrecord,$contents);
        file_put_contents($this->FileName,$contents);
    }
    function StoreRecordInFile($record)
    {
        $MyFile=fopen($this->FileName, "a+");
        fwrite($MyFile,"\r\n".$record);
        fclose($MyFile);
    }
    function DeleteRecordFromFile($record)
    {
        $contents=file_get_contents($this->FileName);
        $contents=str_replace("\r\n".$record,'',$contents);
        file_put_contents($this->FileName,$contents);
    }
    function GetLineWithID($Id)
    {
        if(!file_exists($this->FileName))
        {
            return 0;
        }
        $MyFile = fopen($this->FileName, "r+") or die("Unable to open file!");
        while(!feof($MyFile))
        {
            $line=fgets($MyFile);
            $arrayLine=explode($this->seperator,$line);
            if($arrayLine[0]==$Id)
            {
                return $line;
            }
        }
        return "";
    }
    function GetLastID()
    {
        if(!file_exists($this->FileName))
        {
            return 0;
        }
        $MyFile = fopen($this->FileName, "r+") or die("Unable to open file!");
        $LastID=0;
        while(!feof($MyFile))
        {
            $line=fgets($MyFile);
            $arrayLine=explode($this->seperator,$line);
            if($arrayLine[0]!="")
            {
                $LastID=$arrayLine[0];
            }
        }
        return $LastID;
    }
    function DrawTableFromFile()
    {
        $MyFile = fopen($this->FileName, "r+") or die("Unable to open file!");
        while(!feof($MyFile))
        {
            $line=fgets($MyFile);
            echo "<tr>";
            $arrayLine=explode($this->seperator,$line);
            for($i=0;$i<count($arrayLine);$i++)
            {
                echo "<td>".$arrayLine[$i]."</td>"; 
            }
            echo"</tr>";
            echo"<br>";
        }
        fclose($MyFile);
    }
}
?>