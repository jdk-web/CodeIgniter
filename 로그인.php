public function create(){
  $id = "id"; 
	$pwd = "password";

	$encrypt=password_hash($pwd,PASSWORD_DEFAULT);
	$result = $this->Signup_m->insert($id, $encrypt,$name);

}
 

class Signup_m extends CI_Model { 
public function insert($id,$pwd,$name) {
			$sql="INSERT INTO admin SET id = ?, pwd = ?";
			return $binding = $this->db->query($sql,array($id,$pwd)); //query Binding 
		}
}
