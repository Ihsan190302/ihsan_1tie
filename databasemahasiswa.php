<?php
class database{
	var $host="localhost";
	var $uname="root";
	var $pass="";
	var $db="registrasi";
	var $con;
	function __construct(){
		$this->con=mysqli_connect($this->host,$this->uname,$this->pass,$this->db);
		mysqli_select_db($this->con,$this->db);
	}
	function tampil_data(){
		$data=mysqli_query($this->con,"select * from registrasi");
		while($d=mysqli_fetch_array($data)){
			$hasil[]= $d;
		}
		return $hasil;
	}
	function input($nama,$program,$email){
		mysqli_query($this->con,"insert into registrasi values('','$nama','$program','$email')");
	}
	function hapus($id){
		mysqli_query($this->con,"delete from registrasi where id='$id'");
	}
    function edit($id){
        $data = mysqli_query($this->con,"select * from registrasi where id='$id'");
        while ($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }
	function update($id,$nama,$program,$email){
        mysqli_query($this->con,"update registrasi set nama='$nama', program='$program', email='$email' where id='$id'");
    }
}
?>