<!-- /#sidebar-wrapper -->
<div id="sidebar-wrapper" class="hidden-print">
    <!-- /#smoother -->
    <div id="smoother">
        <ul class="sidebar-nav">
            <li><a class="withripple {{ Route::is('dashboard') ? 'active' : '' }}" href="{{ url('/dashboard') }}"><i class='material-icons'>home</i> Dashboard</a></li>
            <li class="sub-menu">
            	<a class="sub-menu-toggle withripple" href="#sub-list" data-toggle="collapse"><i class='material-icons'>school</i> List 1</a>
            	<ul class="collapse in" id="sub-list">
                    <li><a class="withripple" href="">Sub list 1</a></li>
					<li><a class="withripple" href="">Sub list 2</a></li>
					<li><a class="withripple" href="">Sub list 3</a></li>
					<li><a class="withripple" href="">Sub list 4</a></li>
					<li><a class="withripple" href="">Sub list 5</a></li>
                </ul>
            </li>

            <li><a class="withripple" href=""><i class='material-icons'>assignment</i> List 2</a></li>
        	<li><a class="withripple" href=""><i class='material-icons'>subject</i> List 3</a></li>
        	<li><a class="withripple" href=""><i class='material-icons'>subject</i> List 4</a></li>

        </ul>
    </div> <!-- /#smoother -->
</div>  <!-- /#sidebar-wrapper -->
