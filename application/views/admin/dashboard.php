<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muthuhara preschool</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php echo '<link rel="stylesheet" href="'.base_url($cssfile_name).'">'; ?>
</head>
<body>



<div class="container">
            <div class="adminMain">
                   <div class="adminTopbar">
                       <div class="adminToggle">
                           <span class="adminToggleIcon">
                                <ion-icon name="menu-outline"></ion-icon>
                           </span>
           
                       </div>

                       <div>
                       <?php //echo '<h2> Welcome -'.$this->session->userdata('username').'</h2>' ;
                            echo '<a href="'.base_url().'Auth/logout">Logout</a>';?>
                       </div>
                       <!--user-admin-->
                       <div class="admin-topbar-user">
                           <span class="admin-topbar-user-icon">

                           </span>
                       </div>
                    
                   </div>
           
               </div>
           
           
               <div class="Row">
                          
           
                           <div class="sidebarAdmin">
                           <ul>
                               <li>
                                   <a href="/Dashboard">
                                       <span class="icon">
                                       <ion-icon name="grid-outline"></ion-icon>
                                        </span>
                                       <span class="text">Dashboard</span>
                                   </a>
                               </li>
           
                           <li>
                               <a href="/StudentList">
                                   <span class="icon">
                                   <ion-icon name="people-outline"></ion-icon>
                                   </span>
                                   <span class="text">Students List</span>
                               </a>
                           </li>
           
                           <li>
                               <a href="#">
                                   <span class="icon">
                                        <ion-icon name="person-outline"></ion-icon>
                                   </span>
                                   <span class="text">Teacher List</span>
                               </a>
                           </li>
           
                           <li>
                               <a href="#">
                                   <span class="icon">
                                        <ion-icon name="book-outline"></ion-icon>
                                   </span>
                                   <span class="text">Grading</span>
                               </a>
                           </li>
           
                           <li>
                               <a href="#">
                                   <span class="icon">
                                        <ion-icon name="document-text-outline"></ion-icon>
                                   </span>
                                   <span class="text">Student Attendence</span>
                               </a>
                           </li>
           
                           <li>
                               <a href="#">
                                   <span class="icon">
                                        <ion-icon name="cash-outline"></ion-icon>                                
                                   </span>
                                   <span class="text">Check Payment</span>
                               </a>
                           </li>
           
                           <li>

                           <li>
                               <a href="/AddAdmin" target="_parent">
                                   <span class="icon">
                                   <ion-icon name="person-add-outline"></ion-icon>
                                   </span>
                                   <span class="text">Add Admin</span>
                               </a>
                           </li>

                       </ul>
                   </div>
                   </div>
                   </div>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </body>
</html>