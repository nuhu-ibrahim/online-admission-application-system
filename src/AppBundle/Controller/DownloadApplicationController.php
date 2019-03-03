<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Student;

class DownloadApplicationController extends Controller
{
    /**
     * @Route("/downloadapplications", name="download")
     */
    public function indexAction(Request $request)
    {    
        $conn = mysqli_connect("localhost", "root", "", "kaduna_polytechnic");
        $SQL = "SELECT app_no, programme, course, surname, othername, firstname,"
                . " email, sex, state, mstatus, inst_name, reg_no, qual, field  "
                . "from  studenttbl "
                . "order by course, surname, firstname, othername ASC";
        $header = '';
        $result ='';
        $exportData = mysqli_query ($conn,$SQL );

        $fields = array("APPLICATION NUMBER", "PROGRAMME", "COURSE", "SURNAME",
            "OTHERNAME", "FIRSTNAME", "EMAIL", "GENDER", "STATE OF ORIGIN", "MARITAL STATUS",
            "INSTITUTION NAME", "REGISTRATION NUMBER", "QUALIFICATION", "FIELD OF STUDY");
    
        for ( $i = 0; $i < count($fields); $i++ )
        {
            $header .= $fields[$i]. "\t";
        }
        while( $row = mysqli_fetch_row( $exportData ) )
        {   
            //Put row values in a student object and validate
            $student= new Student();
            $student->setAppNo($row[0]);
            $student->setProgramme($row[1]);
            $student->setCourse($row[2]);
            $student->setSurname($row[3]);
            $student->setOthername($row[4]);
            $student->setFirstname($row[5]);
            $student->setEmail($row[6]);
            $student->setSex($row[7]);
            $student->setState($row[8]);
            $student->setMstatus($row[9]);
            $student->setInstName($row[10]);
            $student->setRegNo($row[11]);
            $student->setQual($row[12]);
            $student->setField($row[13]);
  
            $validator = $this->get('validator');
            $errors = $validator->validate($student, null, array('strict3'));
            if(count($errors)==0){
                $line = '';
                foreach( $row as $value ){
                        if ( ( !isset( $value ) ) || ( $value == "" ) ){
                            $value = "\t";
                        }else{
                            $value = str_replace( '"' , '""' , $value );
                            $value = '"' . $value . '"' . "\t";
                        }
                        $line .= $value;
                }
                $result .= trim( $line ) . "\n";
            }
        }
        $result = str_replace( "\r" , "" , $result );
        
        if ( $result == "" ){
            $result = "\nNo Record(s) Found!\n";
        }
        header("Content-type: application/octet-stream");
        header("Content-Disposition: attachment; filename=export.xls");
        header("Pragma: no-cache");
        header("Expires: 0");
        return new Response("$header\n$result");
    }
}