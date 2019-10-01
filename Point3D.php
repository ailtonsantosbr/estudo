<?php
/*
* Point3D.php
*
* Represents one location or position in 3-dimensional space 
* using an (x, y, z) coordinate system.
*/

class Point3D {
	public $x;
	public $y;
	public $z;			// the x coordinate of this Point.

	/*
	* use the x and y variables inherited from Point.php.
	*/
	public function __construct($xCoord=0, $yCoord=0, $zCoord=0){
		$this->x = $xCoord;
		$this->y = $yCoord;
		$this->z = $zCoord;
	}

	/*
	* the (String) representation of this points as "Point3D(x, y, z)".
	*/
	public function __toString() {
		return 'Point3D(x=' . $this->x . ', y=' . $this->y . ', z=' . $this->z . ')';
	}
}


?>