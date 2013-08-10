abstract class User 
{
    protected static $sal = 0;   
    static abstract function getSal();
    static abstract function setSal($sal);    
}
class Vip extends User 
{
  static function getSal()
    {
		return self::$sal;
	}
	static function setSal($sal)
    {
		self::$sal = $sal;
	}	
}
vip::setSal(5000);
echo  "you sal is ". vip::getSal();
