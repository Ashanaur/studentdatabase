<?php
    class Main{
        protected $host = 'localhost';
        protected $user = 'root';
        protected $pass = '';
        protected $db = 'clg';
        protected $con;
        protected $sql;
        protected $result;
        //property
        protected $sname;
        protected $fname;
        protected $mname;
        protected $photo;
        protected $tech;
        protected $shift;
        protected $broll;
        protected $reg;
        protected $semister;
        protected $croll;
        protected $birth;
        protected $session;
        protected $padd;
        protected $ppadd;
        protected $mob;
        protected $blood;
        protected $email;
        protected $religion;
        protected $username;
        protected $userid;
        protected $id;
        public function __construct(){
            if(!isset($this->con)){
                $this->con = new mysqli($this->host,$this->user,$this->pass,$this->db);
                if($this->con){
                    //echo 'db connected';
                }else{
                    echo 'error';
                }
            }
            return $this->con;
        }
        public function index(){
            if($_SESSION['user']>0){
                return true;
            }else{
                return false;
            }
        }
        public function index1(){
            if($_SESSION['userr']>0){
                return true;
            }else{
                return false;
            }
        }
        public function set_session($uid){
            $this->userid = $uid;
            $_SESSION['user'] = $this->userid;
        }
        public function set_session1($uid){
            $this->userid = $uid;
            $_SESSION['userr'] = $this->userid;
        }
        public function retrive($u){
            $this->username = $u;
            $this->sql = "SELECT * FROM user WHERE user = '$this->username'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                echo 'error';
            }
        }
        public function retriv1($ro){
            $this->broll = $ro;
            $this->sql = "SELECT * FROM reg WHERE broll = '$this->broll'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                echo 'error';
            }
        }
        public function insert($ro,$re){
            $this->broll = $ro;
            $this->reg = $re;
            $this->sql = "INSERT INTO reg(broll,reg) VALUES('$this->broll','$this->reg')";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return true;
            }else{
                return false;
            }
        }
        public function viewdata(){
            $this->sql = "SELECT id,sname, photo, tech, shift, broll, reg FROM reg";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                echo 'error'; 
            }
        }
        public function search($ro){
            $this->broll = $ro;
            $this->sql = "SELECT id,sname, photo, tech, shift, broll, reg FROM reg WHERE broll = '$this->broll'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                echo "error";
            }
        }
        public function single_data($id){
            $this->id = $id;
            $this->sql = "SELECT * FROM reg WHERE id = '$this->id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return $this->result;
            }else{
                echo 'erroe';
            }
        }
        public function allupdate($sna,$fna,$mna,$pho,$tec,$shif,$bro,$re,$sem,$cro,$birth,$sess,$padd,$ppadd,$mob,$blood,$email,$religion,$id){
            $this->sname = $sna;
            $this->fname = $fna;
            $this->mname = $mna;
            $this->photo = $pho;
            $this->tech = $tec;
            $this->shift = $shif;
            $this->broll = $bro;
            $this->reg = $re;
            $this->semister = $sem;
            $this->croll = $cro;
            $this->birth = $birth;
            $this->session = $sess;
            $this->padd = $padd;
            $this->ppadd = $ppadd;
            $this->mob = $mob;
            $this->blood = $blood;
            $this->email = $email;
            $this->religion = $religion;
            $this->id = $id;
            $this->sql =  "UPDATE reg SET sname='$this->sname', fname='$this->fname', mname='$this->mname', photo='$this->photo', tech='$this->tech', shift='$this->shift', broll='$this->broll', reg='$this->reg', semis='$this->semister', croll='$this->croll', birth='$this->birth', session='$this->session', padd='$this->padd', ppadd='$this->ppadd', mob='$this->mob', blood='$this->blood', email='$this->email', religion='$this->religion'  WHERE id='$this->id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return true;
            }else{
                return false;
            }
        }
        public function update($sna,$fna,$mna,$tec,$shif,$bro,$re,$sem,$cro,$birth,$sess,$padd,$ppadd,$mob,$blood,$email,$religion,$id){
            $this->sname = $sna;
            $this->fname = $fna;
            $this->mname = $mna;
            $this->tech = $tec;
            $this->shift = $shif;
            $this->broll = $bro;
            $this->reg = $re;
            $this->semister = $sem;
            $this->croll = $cro;
            $this->birth = $birth;
            $this->session = $sess;
            $this->padd = $padd;
            $this->ppadd = $ppadd;
            $this->mob = $mob;
            $this->blood = $blood;
            $this->email = $email;
            $this->religion = $religion;
            $this->id = $id;
            $this->sql =  "UPDATE reg SET sname='$this->sname', fname='$this->fname', mname='$this->mname', tech='$this->tech', shift='$this->shift', broll='$this->broll', reg='$this->reg', semis='$this->semister', croll='$this->croll', birth='$this->birth', session='$this->session', padd='$this->padd', ppadd='$this->ppadd', mob='$this->mob', blood='$this->blood', email='$this->email', religion='$this->religion'  WHERE id='$this->id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return true;
            }else{
                return false;
            }
        }
        public function delete($id){
            $this->id = $id;
            $this->sql = "DELETE FROM reg WHERE id ='$this->id'";
            $this->result = $this->con->query($this->sql);
            if($this->result == true){
                return true;
            }else{
                return false;
            }
        }
        public function __destruct(){
            $this->con->close();
        }

    }
    // $obj = new Main;
    // $obj->insert(243234,4543);
?>