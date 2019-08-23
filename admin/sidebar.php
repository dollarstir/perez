
<?php 


echo '<div class="sidebar-wrapper sidebar-theme">
            
            <div id="dismiss" class="d-lg-none"><i class="flaticon-cancel-12"></i></div>
            
            <nav id="sidebar">

                <ul class="navbar-nav theme-brand flex-row  d-none d-lg-flex">
                    <li class="nav-item d-flex">
                        <a href="home.php" class="navbar-brand">
                            <img src="assets/img/log2.png" class="img-fluid" alt="logo" width="70px" height="70px">
                        </a>
                        <p class="border-underline"></p>
                    </li>
                    <li class="nav-item theme-text">
                        <a href="home.php" class="nav-link"> HCT </a>
                    </li>
                </ul>


                <ul class="list-unstyled menu-categories" id="accordionExample">
                    <li class="menu" style="color:white;">
                        <a href="home.php">
                            <div class="">
                                <i class="flaticon-computer-6 ml-3"></i>
                                <span>Home</span>
                            </div>

                            <div>
                               
                            </div>
                        </a>
                        
                    </li>
                   
                    

                   

                    

                    


                   



                <li class="menu">
                    <a href="#users" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <div class="">
                        <i class="flaticon-elements"></i>
                            <span>Properties</span>
                        </div>
                        <div>
                            <i class="flaticon-right-arrow"></i>
                        </div>
                    </a>
                    <ul class="collapse submenu list-unstyled" id="users" data-parent="#accordionExample">
                        <li>
                            <a href="addpro.php"> Add Property </a>
                        </li>
                        <li>
                            <a href="view_pro.php"> View Properties </a>
                        </li>

                        



                       

                       
                    </ul>
                </li>




               



                    




                   


                    


                    
                    
                    
                </ul>
            </nav>

        </div>'
               ;?>