class BitArray implements ArrayAccess 
{
    private $arr = array();
    
    public function __construct(int $number) 
    {
        $this->arr = str_split(decbin($number), 1);
    }
    
    public function getBit($offset) 
    {    
        return isset($this->arr[$offset]) ? $this->arr[$offset] : null;
    }
    
    public function setBit($offset, $val) 
    {
        if ($offset<0 || $offset>31) {
            return null;
        }
        $this->arr[$offset] = (bool)$val;   
    }
 }
