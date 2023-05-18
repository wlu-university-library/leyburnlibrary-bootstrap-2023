<?php

class WLL_Directory {

	function __construct () {
	}

	private function cmplast($a, $b) {
	    if ($a['last_name'] == $b['last_name']) {
	        return 0;
	    }
	    return ($a['last_name'] < $b['last_name']) ? -1 : 1;
	}
	
	private function retrieveStaff($row) {
		echo "<tr>";
		echo "<td><a href='/about/library-directory/{$row["slug"]}'>{$row["first_name"]} {$row["last_name"]}</a><br/><span class='title'>{$row["staff_title"]}</span></td>";
		echo "<td>{$row["phone_number"]}</td>";
		echo "<td>{$row["e_mail_address"]}</td>";
		echo "<td>{$row["office"]}</td>";
		echo "<td>{$row["department"]}</td>";
		echo "</tr>";
	}

	public function retrieveStaffAlpha() {
		$params = array(
			'limit' => -1,
			'orderby' => "last_name ASC, first_name ASC",
	    );

	    $pod = pods ( "librarystaff", $params );

	    if ( $pod->total() > 0 ) {
			echo "<table class='table table-hover table-condensed'>";
		
			while ($entry = $pod->fetch()) {
				$this->retrieveStaff($entry);
			}
			
			echo "</table>";
		}
	}

	public function retrieveStaffByDept() {
		$params = array(
	   		'limit' => -1,
			'orderby' => 'name ASC'
	    );

	    $pod = pods( "department", $params );

	    if ( $pod->total() > 0 ) {
	        while ( $pod->fetch() ) {
	            echo "<div class='department_entry'>";
				echo "<div class='dept_info'>";
	        	echo "<div class='dept_name'>" . $pod->display("name") . "</div>";
	            if ($pod->field("department_phone") != "") {
		            echo "<div class='dept_phone'>" . $pod->display("department_phone") . "</div>";
	            }
	            echo "</div>";
	            $members = $pod->field("members");
	            uasort($members, array($this, "cmplast"));
				echo "<table class='table table-hover table-condensed'>";
		        foreach ( $members as $member ) {
					$this->retrieveStaff($member);
				}
				echo "</table>";
				echo "</div>";
			}
		}
	}
}

$libdir = new WLL_Directory();

if(isset($_POST['action']) && !empty($_POST['action'])) {
    $action = $_POST['action'];
    switch($action) {
        case 'alpha': 
			$libdir->retrieveStaffAlpha();
			break;
        case 'dept': 
			$libdir->retrieveStaffByDept();
			break;
		default: 
			$libdir->retrieveStaffAlpha();
			break;
    }
} else {
	echo "crap";
}

function display_wlu_library_directory_HTML() {
	$html = '
		<div id="dirtype">
			<label for="diralpha">Alphabetical</label> <input type="radio" name="dirtype" id="diralpha" value="alpha" checked="checked" />
			<label for="dirdept" style="margin-left: 15px;">By Department</label> <input type="radio" name="dirtype" id="dirdept" value="dept" />
			<span id="load-spinner"><i class="fa fa-refresh fa-spin"></i></span>
		</div>
		<div id="directory_block"></div>
		';

	return $html;
}

?>
