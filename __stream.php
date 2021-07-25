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