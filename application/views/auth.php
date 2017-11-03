<?php
if (isset($this->session->userdata['logged_in'])) {
    header("location:". site_url('/dashboard')."");
}else {
    print_r("iyo");
    //header("location:". site_url('/')."");
}
?>