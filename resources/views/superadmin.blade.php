<!DOCTYPE html>
<html>


<!-- Mirrored from saturn.pinsupreme.com/index.html by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 07 Jan 2017 09:27:34 GMT -->
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  

  <link rel='stylesheet' href='03a03bbe34da26df16eb239ba68ecc0a.css'>

  <link href='../fonts.googleapis.com/cssf7ff.css?family=Roboto:100,300,400,700|Roboto+Condensed:300,400,700' rel='stylesheet' type='text/css'>

  <link href="assets/favicon.ico" rel="shortcut icon">
  <link href="assets/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    @javascript html5shiv respond.min
  <![endif]-->

  <title>System</title>

</head>

<body class="glossed">
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42863888-4', 'pinsupreme.com');
  ga('send', 'pageview');

</script>
<div class="all-wrapper fixed-header left-menu">
  <div class="page-header">
  <div class="header-links hidden-xs">
    
   
    <div class="dropdown hidden-sm hidden-xs">
      

      
    </div>

    <div class="dropdown">
      <a href="#" class="header-link clearfix" data-toggle="dropdown">
        <div class="avatar">
          <img src="assets/images/avatar-small.jpg" alt="">
        </div>
        <div class="user-name-w">
          Account <i class="fa fa-caret-down"></i>
        </div>
      </a>
      <ul class="dropdown-menu dropdown-inbar">
        <li><a href="/logout"><span class="label label-warning"></span> <i class="fa fa-envelope"></i> Logout</a></li>
        
      </ul>
    </div>
  </div>
  
  <a class="menu-toggler" href="#"><i class="fa fa-bars"></i></a>
  <h1>Dashboard</h1>
</div>
  <div class="side">
  <div class="sidebar-wrapper">
  <ul>
    
    
    
   
    
  </ul>
</div>
  <div class="sub-sidebar-wrapper">
  <ul class="nav">
    <li><a href="#widget_stats">Rules</a></li>
    <li><a href="#widget_profit_chart">Crimes</a></li>
    <li><a href="#widget_tasks_list">Prisoners</a></li>
    
   
    <li><a href="#widget_calendar">Employees</a></li>
    <li><a href="#widget_tabs">Claims</a></li>
  </ul>
</div>
  </div>
  <div class="main-content">
    <ol class="breadcrumb">
  {{-- <li><a href="#">Home</a></li>
  <li><a href="#">Bread</a></li>
  <li class="active">Example</li> --}}
</ol>
<div class="alert alert-warning alert-dismissable bottom-margin">
  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
  <i class="fa fa-exclamation-circle"></i> <strong>Welcome!</strong> Crime management system
</div>
<!-- start of rules -->
<div class="row">
  <div class="col-md-12">
    <div class="widget widget-blue">
      <span class="offset_anchor" id="widget_stats"></span>
      <div class="widget-title">
        <div class="widget-controls">
  <a href="#" class="widget-control widget-control-full-screen" data-toggle="tooltip" data-placement="top" title="" data-original-title="Full Screen"><i class="fa fa-expand"></i></a>
  <a href="#" class="widget-control widget-control-full-screen widget-control-show-when-full" data-toggle="tooltip" data-placement="left" title="" data-original-title="Exit Full Screen"><i class="fa fa-expand"></i></a>
  <a href="#" data-toggle="dropdown" class="widget-control widget-control-settings"><i class="fa fa-cog"></i></a>
  <div class="dropdown" data-toggle="tooltip" data-placement="top" title="" data-original-title="Settings">
    <ul class="dropdown-menu dropdown-menu-small" role="menu" aria-labelledby="dropdownMenu1">
      <li class="dropdown-header">Set Widget Color</li>
      <li><a data-widget-color="blue" class="set-widget-color" href="#">Blue</a></li>
      <li><a data-widget-color="red" class="set-widget-color" href="#">Red</a></li>
      <li><a data-widget-color="green" class="set-widget-color" href="#">Green</a></li>
      <li><a data-widget-color="orange" class="set-widget-color" href="#">Orange</a></li>
      <li><a data-widget-color="purple" class="set-widget-color" href="#">Purple</a></li>
    </ul>
  </div>

  <a href="#" class="widget-control widget-control-refresh" data-toggle="tooltip" data-placement="top" title="" data-original-title="Refresh"><i class="fa fa-refresh"></i></a>
  <a href="#" class="widget-control widget-control-minimize" data-toggle="tooltip" data-placement="top" title="" data-original-title="Minimize"><i class="fa fa-minus-circle"></i></a>
  <a href="#" class="widget-control widget-control-remove" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove"><i class="fa fa-times-circle"></i></a>
</div>

        <h3><i class="fa fa-bar-chart-o"></i> RULES</h3>
      </div>
      <div class="widget-content">
        <table class="table table-bordered table-striped table-danger" style="background-coor: brown;color:white;">
        
        <tr style="color:black;">
          <td>#</td>
          <td>Title</td>
          <td>Description</td>
        </tr>
      @foreach($rules as $rule)
        <tr style="color:black;">
          
          <td>{{ $rule->id }}</td>
          <td>{{$rule->name}}</td>
          <td>{{$rule->description}}</td>

        </tr>
        @endforeach

        </table>
        
      </div>
    </div>

  </div>
  





</div>
<!-- end of rules-->
<!-- start of crimes-->
<div class="widget widget-green">
  <span class="offset_anchor" id="widget_profit_chart"></span>
  <div class="widget-title">
    <div class="widget-controls">
  <a href="#" class="widget-control widget-control-full-screen" data-toggle="tooltip" data-placement="top" title="" data-original-title="Full Screen"><i class="fa fa-expand"></i></a>
  <a href="#" class="widget-control widget-control-full-screen widget-control-show-when-full" data-toggle="tooltip" data-placement="left" title="" data-original-title="Exit Full Screen"><i class="fa fa-expand"></i></a>
  <a href="#" data-toggle="dropdown" class="widget-control widget-control-settings"><i class="fa fa-cog"></i></a>
  <div class="dropdown" data-toggle="tooltip" data-placement="top" title="" data-original-title="Settings">
    <ul class="dropdown-menu dropdown-menu-small" role="menu" aria-labelledby="dropdownMenu1">
      <li class="dropdown-header">Set Widget Color</li>
      <li><a data-widget-color="blue" class="set-widget-color" href="#">Blue</a></li>
      <li><a data-widget-color="red" class="set-widget-color" href="#">Red</a></li>
      <li><a data-widget-color="green" class="set-widget-color" href="#">Green</a></li>
      <li><a data-widget-color="orange" class="set-widget-color" href="#">Orange</a></li>
      <li><a data-widget-color="purple" class="set-widget-color" href="#">Purple</a></li>
    </ul>
  </div>
  <a href="#" class="widget-control widget-control-refresh" data-toggle="tooltip" data-placement="top" title="" data-original-title="Refresh"><i class="fa fa-refresh"></i></a>
  <a href="#" class="widget-control widget-control-minimize" data-toggle="tooltip" data-placement="top" title="" data-original-title="Minimize"><i class="fa fa-minus-circle"></i></a>
  <a href="#" class="widget-control widget-control-remove" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove"><i class="fa fa-times-circle"></i></a>
</div>
    <h3><i class="fa fa-bar-chart-o"></i> CRIMES</h3>
  </div>
<!-- contenf for crimes here-->
  
  <table class="table table-bordered table-striped table-danger" style="background-coor: brown;color:white;">
        
        <tr style="color:black;">
          <td>#</td>
          <td>Name</td>
             <td>Police Station</td>
          <td>Description</td>
        </tr>
      @foreach($crimes as $crime)
        <tr style="color:black;">
          
          <td>{{ $crime->id }}</td>
          <td>{{$crime->name}}</td>
          <td>{{$crime->police_station_id }}</td>
          <td>{{$crime->description}}</td>

        </tr>
        @endforeach

        </table>
  
<!-- end of content for crimes here-->
</div>

<!-- end of crimes-->
<br><br><br><br><br><br><br><br><br><br>
<div class="row">
  <div class="col-md-12">
    <div class="widget widget-blue">
      <div class="widget-title">
        <div class="widget-controls">
        <span class="offset_anchor" id="widget_tasks_list"></span>
  <a href="#" class="widget-control widget-control-full-screen" data-toggle="tooltip" data-placement="top" title="" data-original-title="Full Screen"><i class="fa fa-expand"></i></a>
  <a href="#" class="widget-control widget-control-full-screen widget-control-show-when-full" data-toggle="tooltip" data-placement="left" title="" data-original-title="Exit Full Screen"><i class="fa fa-expand"></i></a>
  <a href="#" data-toggle="dropdown" class="widget-control widget-control-settings"><i class="fa fa-cog"></i></a>
  <div class="dropdown" data-toggle="tooltip" data-placement="top" title="" data-original-title="Settings">
    <ul class="dropdown-menu dropdown-menu-small" role="menu" aria-labelledby="dropdownMenu1">
      <li class="dropdown-header">Set Widget Color</li>
      <li><a data-widget-color="blue" class="set-widget-color" href="#">Blue</a></li>
      <li><a data-widget-color="red" class="set-widget-color" href="#">Red</a></li>
      <li><a data-widget-color="green" class="set-widget-color" href="#">Green</a></li>
      <li><a data-widget-color="orange" class="set-widget-color" href="#">Orange</a></li>
      <li><a data-widget-color="purple" class="set-widget-color" href="#">Purple</a></li>
    </ul>
  </div>
  <a href="#" class="widget-control widget-control-refresh" data-toggle="tooltip" data-placement="top" title="" data-original-title="Refresh"><i class="fa fa-refresh"></i></a>
  <a href="#" class="widget-control widget-control-minimize" data-toggle="tooltip" data-placement="top" title="" data-original-title="Minimize"><i class="fa fa-minus-circle"></i></a>
  <a href="#" class="widget-control widget-control-remove" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove"><i class="fa fa-times-circle"></i></a>
</div>
        <h3><i class="fa fa-user"></i> PRISONERS</h3>
      </div>
      <div class="widget-content">
        <table class="table table-bordered table-striped table-danger" style="background-coor: brown;color:white;">
        
        <tr style="color:black;">
          <td>#</td>
          <td>Name</td>
          <td>Prison</td>
          <td>Usernmae</td>
           <td>First Name</td>
          <td>Last Name</td>
          <td>Date Of Birth</td>
            <td>Gender</td>
              <td>Address</td>
              <td>Crime</td>
              <td>IN</td>
              <td>OUT</td>


        </tr>
      @foreach($prisoners as $prisoner)
        <tr style="color:black;">
          
          <td>{{ $prisoner->id }}</td>
          <td>{{$prisoner->prison_id}}</td>
          <td>{{$prisoner->police_station_id }}</td>
          <td>{{$prisoner->username}}</td>
          <td>{{$prisoner->firstname}}</td>
          <td>{{$prisoner->lastname}}</td>
          <td>{{$prisoner->dateofbirth}}</td>
          <td>{{$prisoner->gender}}</td>
          <td>{{$prisoner->address}}</td>
          <td>{{$prisoner->crime_id}}</td>
           <td>{{$prisoner->entrydate}}</td>
           <td>{{$prisoner->dischargedate}}</td>

        </tr>
        @endforeach

        </table>
      </div>
    </div>
  </div>
  <div class="col-md-6">
    <div class="widget widget-red">
      <span class="offset_anchor" id="widget_tasks_list"></span>
     
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="widget widget-blue">
      <span class="offset_anchor" id="widget_real_time_chart"></span>
      <div class="widget-title">
        <div class="widget-controls">
  <a href="#" class="widget-control widget-control-full-screen" data-toggle="tooltip" data-placement="top" title="" data-original-title="Full Screen"><i class="fa fa-expand"></i></a>
  <a href="#" class="widget-control widget-control-full-screen widget-control-show-when-full" data-toggle="tooltip" data-placement="left" title="" data-original-title="Exit Full Screen"><i class="fa fa-expand"></i></a>
  <a href="#" data-toggle="dropdown" class="widget-control widget-control-settings"><i class="fa fa-cog"></i></a>
  <div class="dropdown" data-toggle="tooltip" data-placement="top" title="" data-original-title="Settings">
    <ul class="dropdown-menu dropdown-menu-small" role="menu" aria-labelledby="dropdownMenu1">
      <li class="dropdown-header">Set Widget Color</li>
      <li><a data-widget-color="blue" class="set-widget-color" href="#">Blue</a></li>
      <li><a data-widget-color="red" class="set-widget-color" href="#">Red</a></li>
      <li><a data-widget-color="green" class="set-widget-color" href="#">Green</a></li>
      <li><a data-widget-color="orange" class="set-widget-color" href="#">Orange</a></li>
      <li><a data-widget-color="purple" class="set-widget-color" href="#">Purple</a></li>
    </ul>
  </div>
  <a href="#" class="widget-control widget-control-refresh" data-toggle="tooltip" data-placement="top" title="" data-original-title="Refresh"><i class="fa fa-refresh"></i></a>
  <a href="#" class="widget-control widget-control-minimize" data-toggle="tooltip" data-placement="top" title="" data-original-title="Minimize"><i class="fa fa-minus-circle"></i></a>
  <a href="#" class="widget-control widget-control-remove" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove"><i class="fa fa-times-circle"></i></a>
</div>
<div class="row">

</div>
    
<div class="row">

  <div class="col-md-12">
    <div class="widget widget-blue">
      <span class="offset_anchor" id="widget_calendar"></span>
      <div class="widget-title">
        <div class="widget-controls">
  <a href="#" class="widget-control widget-control-full-screen" data-toggle="tooltip" data-placement="top" title="" data-original-title="Full Screen"><i class="fa fa-expand"></i></a>
  <a href="#" class="widget-control widget-control-full-screen widget-control-show-when-full" data-toggle="tooltip" data-placement="left" title="" data-original-title="Exit Full Screen"><i class="fa fa-expand"></i></a>
  <a href="#" data-toggle="dropdown" class="widget-control widget-control-settings"><i class="fa fa-cog"></i></a>
  <div class="dropdown" data-toggle="tooltip" data-placement="top" title="" data-original-title="Settings">
    <ul class="dropdown-menu dropdown-menu-small" role="menu" aria-labelledby="dropdownMenu1">
      <li class="dropdown-header">Set Widget Color</li>
      <li><a data-widget-color="blue" class="set-widget-color" href="#">Blue</a></li>
      <li><a data-widget-color="red" class="set-widget-color" href="#">Red</a></li>
      <li><a data-widget-color="green" class="set-widget-color" href="#">Green</a></li>
      <li><a data-widget-color="orange" class="set-widget-color" href="#">Orange</a></li>
      <li><a data-widget-color="purple" class="set-widget-color" href="#">Purple</a></li>
    </ul>
  </div>
  <a href="#" class="widget-control widget-control-refresh" data-toggle="tooltip" data-placement="top" title="" data-original-title="Refresh"><i class="fa fa-refresh"></i></a>
  <a href="#" class="widget-control widget-control-minimize" data-toggle="tooltip" data-placement="top" title="" data-original-title="Minimize"><i class="fa fa-minus-circle"></i></a>
  <a href="#" class="widget-control widget-control-remove" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove"><i class="fa fa-times-circle"></i></a>
</div>
        <h3><i class="fa fa-calendar"></i> EMPLOYEES</h3>
      </div>
      <div class="widget-content">
      <table class="table table-bordered table-striped table-danger" style="background-coor: brown;color:white;">
        
        <tr style="color:black;">
          <td>#</td>
          <td>Police Station</td>
          <td>Username</td>
          <td>title</td>
          <td>First Name</td>
          <td>Last Name</td>
          <td>Gender</td>
          <td>Address</td>
        </tr>
      @foreach($employees as $employee)
        <tr style="color:black;">
          
          <td>{{ $employee->id }}</td>
          <td>{{$employee->police_station_id}}</td>
          <td>{{$employee->username}}</td>
           <td>{{$employee->title}}</td>
            <td>{{$employee->firstname}}</td>
             <td>{{$employee->lastname}}</td>
              <td>{{$employee->gender}}</td>
               <td>{{$employee->address}}</td>
                

        </tr>
        @endforeach

        </table>
        <div id="calendar"></div>
      </div>
    </div>
  </div>
  {{-- <div class="col-md-4">
    <div class="widget widget-red">
      <div class="widget-title">
        <div class="widget-controls">
  <a href="#" class="widget-control widget-control-full-screen" data-toggle="tooltip" data-placement="top" title="" data-original-title="Full Screen"><i class="fa fa-expand"></i></a>
  <a href="#" class="widget-control widget-control-full-screen widget-control-show-when-full" data-toggle="tooltip" data-placement="left" title="" data-original-title="Exit Full Screen"><i class="fa fa-expand"></i></a>
  <a href="#" data-toggle="dropdown" class="widget-control widget-control-settings"><i class="fa fa-cog"></i></a>
  <div class="dropdown" data-toggle="tooltip" data-placement="top" title="" data-original-title="Settings">
    <ul class="dropdown-menu dropdown-menu-small" role="menu" aria-labelledby="dropdownMenu1">
      <li class="dropdown-header">Set Widget Color</li>
      <li><a data-widget-color="blue" class="set-widget-color" href="#">Blue</a></li>
      <li><a data-widget-color="red" class="set-widget-color" href="#">Red</a></li>
      <li><a data-widget-color="green" class="set-widget-color" href="#">Green</a></li>
      <li><a data-widget-color="orange" class="set-widget-color" href="#">Orange</a></li>
      <li><a data-widget-color="purple" class="set-widget-color" href="#">Purple</a></li>
    </ul>
  </div>
  <a href="#" class="widget-control widget-control-refresh" data-toggle="tooltip" data-placement="top" title="" data-original-title="Refresh"><i class="fa fa-refresh"></i></a>
  <a href="#" class="widget-control widget-control-minimize" data-toggle="tooltip" data-placement="top" title="" data-original-title="Minimize">

  <a href="#" class="widget-control widget-control-remove" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove"><i class="fa fa-times-circle"></i></a>
</div> --}}
        {{-- <h3><i class="fa fa-bullseye"></i>  Chat</h3> --}}
      </div>
      </div>
    </div>
  </div>
</div>
<div class="widget widget-bordered">
  <div class="widget-title bottom-margin">
    <div class="widget-controls">
  <a href="#" class="widget-control widget-control-full-screen" data-toggle="tooltip" data-placement="top" title="" data-original-title="Full Screen"><i class="fa fa-expand"></i></a>
  <a href="#" class="widget-control widget-control-full-screen widget-control-show-when-full" data-toggle="tooltip" data-placement="left" title="" data-original-title="Exit Full Screen"><i class="fa fa-expand"></i></a>
  <a href="#" data-toggle="dropdown" class="widget-control widget-control-settings"><i class="fa fa-cog"></i></a>
  <div class="dropdown" data-toggle="tooltip" data-placement="top" title="" data-original-title="Settings">
    <ul class="dropdown-menu dropdown-menu-small" role="menu" aria-labelledby="dropdownMenu1">
      <li class="dropdown-header">Set Widget Color</li>
      <li><a data-widget-color="blue" class="set-widget-color" href="#">Blue</a></li>
      <li><a data-widget-color="red" class="set-widget-color" href="#">Red</a></li>
      <li><a data-widget-color="green" class="set-widget-color" href="#">Green</a></li>
      <li><a data-widget-color="orange" class="set-widget-color" href="#">Orange</a></li>
      <li><a data-widget-color="purple" class="set-widget-color" href="#">Purple</a></li>
    </ul>
  </div>
  <a href="#" class="widget-control widget-control-refresh" data-toggle="tooltip" data-placement="top" title="" data-original-title="Refresh"><i class="fa fa-refresh"></i></a>
  <a href="#" class="widget-control widget-control-minimize" data-toggle="tooltip" data-placement="top" title="" data-original-title="Minimize"><i class="fa fa-minus-circle"></i></a>
  <a href="#" class="widget-control widget-control-remove" data-toggle="tooltip" data-placement="top" title="" data-original-title="Remove"><i class="fa fa-times-circle"></i></a>
</div>
    <h3><i class="fa fa-bullseye"></i> <center>CLAIMS</center></h3>
  </div>
  <table class="table table-bordered table-striped table-danger" style="background-coor: brown;color:white;">
        
        <tr style="color:black;">
          <td>#</td>
          <td>Name</td>
          <td>Description</td>
          <td>Reporter</td>
          <td>Date</td>
          <td>Employee</td>
          <td>Police Station</td>
        
        </tr>
      @foreach($claims as $claim)
        <tr style="color:black;">
          
          <td>{{ $claim->id }}</td>
          <td>{{$claim->name}}</td>
          <td>{{$claim->description}}</td>
           <td>{{$claim->reporter}}</td>
            <td>{{$claim->date}}</td>
             <td>{{$claim->employee}}</td>
              <td>{{$claim->policestation}}</td>
              
                

        </tr>
        @endforeach

        </table>

  </div>
<div class="row">
  <div class="col-md-12">
    <span class="offset_anchor" id="widget_tabs"></span>
    <ul class="nav nav-tabs">
      <li class="active"><a href="#tab_pie_chart" data-toggle="tab"><i class="fa fa-bullseye"></i> </a></li>
      <li><a href="#tab_bar_chart" data-toggle="tab"><i class="fa fa-bar-chart-o"></i></a></li>
      <li class="hidden-md hidden-xs"><a href="#tab_table" data-toggle="tab"><i class="fa fa-th"></i> </a></li>
    </ul>
    <div class="tab-content bottom-margin">
     
    
      <div class="tab-pane" id="tab_table">
        
        
      </div>
    </div>
  </div>
</div>
  </div>
  <div class="page-footer">
  © 2013 Saturn Admin Template.
</div>
</div>


<script src="assets/jquery/1.10.2/jquery.min.js"></script>
<script src="assets/jquery.js"></script>
<script src="assets/jquery-ui-themes-1.12.1/jquery-ui.min.js"></script>
<script src='ad67372f4b8b70896e8a596720082ac6.js'></script>

<script src='6ede73fb6e204f0d1ba850a2db67eb65.js'></script>
