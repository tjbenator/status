<?php
include dirname(__FILE__) . DIRECTORY_SEPARATOR . "init.php";
include $header;
?>
<div ng-app="statusApp">
	<div ng-controller="ServerListCtrl">
		<div ng-repeat="server in servers">
			<h2>{{server.name}} <small>{{server.address}}</small></h2>

			<div ng-show="server.description" class="well well-sm">{{server.description}}</div>

			<table ng-show="server.services" class="table table-striped table-bordered table-hover">
				<tr>
					<th>Service Name</th>
					<th>Status</th>
				</tr>
				<tr ng-repeat="service in server.services">
					<td>{{service.name}}</td>
					<td><button type="button" class="btn btn-default">{{service.status}}</button></td>
				</tr>
			</table>

		</div>
	</div>
</div>
<?php
include $footer;
