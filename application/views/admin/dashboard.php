<h2>Admin dashboard</h2>
<?php echo '<h2> Welcome -'.$this->session->userdata('username').'</h2>' ;
echo '<a href="'.base_url().'Auth/logout">Logout</a>';?>