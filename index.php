<?php
include dirname(__FILE__) . DIRECTORY_SEPARATOR . "init.php";
include $header;
?>
<div ng-app="statusApp">
	<h1><span class="bar">2,5,3,6,2,1</span> Status</h1>

	<div ng-controller="ServerListCtrl">
		<div ng-repeat="server in servers">
			<h2>{{server.name}} - {{server.address}}</h2>
			<div ng-repeat="service in server.services">
				{{service.name}}
			</div>
		</div>
	</div>
</div>
<?php
include $footer;
