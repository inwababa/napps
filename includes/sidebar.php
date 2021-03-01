<div class="sidebar">
        <div class="sidebar-dropdown"><a href="#">Navigation</a></div>

        <!--- Sidebar navigation -->
        <!-- If the main navigation has sub navigation, then add the class "has_sub" to "li" of main navigation. -->
        <ul id="nav">
          <!-- Main menu with font awesome icon -->
          <li class="open"><a href="dashboard.php"><i class="fa fa-home"></i> Dashboard</a>
          </li>
          <li class="has_sub">
			<a href="#"><i class="fa fa-calendar"></i> Payments  <span class="pull-right"><i class="fa fa-chevron-right"></i></span></a>
            <ul>
              <li><a href="sug-reservation.php">SUG Payments</a></li>
              <li><a href="sug-staylite.php">SUG Payments (Staylite)</a></li>
              <li><a href="naas-reservation.php">NAAS Payments</a></li>
              <li><a href="naas-staylite.php">NAAS Payments (Staylite)</a></li>
              <li><a href="college-reservation.php">College Payments</a></li>
              <li><a href="department-reservation.php">Department Payments</a></li>
              <li><a href="sug-pending.php">SUG Pending</a></li>
                <li><a href="naas-pending.php">NAAS Pending</a></li>
                <li><a href="college-pending.php">College Pending</a></li>
                <li><li><a href="department-pending.php">Department Pending</a></li></li>
              <li><a href="cancelled.php">Cancelled Payments</a></li>
            </ul>
          </li>  
          <!--<li><a href="combo.php"><i class="fa fa-bar-chart-o"></i> Combo</a></li> -->
          <!--<li><a href="order.php"><i class="fa fa-money bgreen"></i> Menu Orders</a></li>-->
          <li><a href="messages.php"><i class="fa fa-envelope"></i> Messages</a></li> 
          <li class="has_sub">
			<!--<a href="#"><i class="fa fa-file-o"></i> Maintenance  <span class="pull-right"><i class="fa fa-chevron-right"></i></span></a>
            <ul>			
              <li><a href="menu.php">Menu</a></li>
              <li><a href="category.php">Category</a></li>
              <li><a href="subcategory.php">Subcategory</a></li>
              <li><a href="event.php">Event</a></li>
              <li><a href="members.php">Members</a></li>
              <li><a href="teams.php">Teams</a></li>
              <li><a href="team_members.php">Team Members</a></li>
              <li><a href="user.php">User</a></li>
            </ul>
          </li>-->
		  <li class="has_sub"><a href="#"><i class="fa fa-bar-chart-o"></i> Report  <span class="pull-right"><i class="fa fa-chevron-right"></i></span></a>
            <ul>
              <li><a href="#reserve" data-toggle="modal">Reservation</a></li>
              <li><a href="#sales" data-toggle="modal">Monthly Sales</a></li>
            </ul>
          </li>		  
          <!---<li><a href="backup.php"><i class="fa fa-bar-chart-o"></i> Backup/Restore</a></li>--->
        </ul>
    </div>
    <?php include 'report_modal.php'; ?>
    <?php include 'report_sales.php'; ?>