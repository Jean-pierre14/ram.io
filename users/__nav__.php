<?php
    stream_wrapper_register("foo",FooWrapper::class, STREAM_IS_URL) or die("Duplication stream wrapper registered");
    class FooWrapper{
        // This will be modified by PHP to show the context passed in the current call
        public $context;
        // This is to store the URLs
        private $url;

        public function stream_opean(string $path, string $mode, int $option, string &$openedpath) : bool {
            $url = parser_url($path);
            if($url === false) return false;
            $this->url = $url['host'] . '/' . $url['path'];
            return true; 
        }
        // to heandler to fwrite() to this stream
        public function stream_write(string $data) : int {
            $this->buffer = $data;
            return strlen($data);
        }
        public function stream_close(){
            $curl = curl_init("http://" . $this->url);
            curl_setopt($curl, CURLOPT_POSTFIELDS, $this->buffer);
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PATCH");
            curl_exec($curl);
            curl_close($curl);
            $this->buffer = "";
        }
        
    }
?>
<nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <a class="navbar-brand" href="index.php">
        <?= $prooject_name; ?> /
        <?= $_SESSION['username']; ?>
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" href="index.php">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="message.php">messages</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../logout.php">Logout</a>
            </li>
        </ul>
    </div>
</nav>