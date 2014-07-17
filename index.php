<?php
include dirname(__FILE__) . DIRECTORY_SEPARATOR . "init.php";
include $header;
?>
<div ng-app="statusApp">
	<div ng-controller="ServerListCtrl">
		<div ng-repeat="server in servers">
			<h2>{{server.name}} <small>{{server.address}}</small></h2>

			<div ng-show="server.description" class="well well-sm">{{server.description}}</div>

			<table ng-show="server.applications" class="table table-striped table-bordered table-hover table-condensed">
				<thead>
					<tr>
						<th>Application Name</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<tr ng-repeat="application in server.applications">
						<td>{{application.name}}</td>
						<td>
							<button type="button" ng-hide="application.status" class="btn btn-danger">{{application.status}}</button>
							<button type="button" ng-show="application.status" class="btn btn-success">{{application.status}}</button>
						</td>
					</tr>
				</tbody>
			</table>

			<table ng-show="server.services" class="table table-striped table-bordered table-hover table-condensed">
				<thead>
					<tr>
						<th>Service Name</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>
					<tr ng-repeat="service in server.services">
						<td>{{service.name}}</td>
						<td>
							<button type="button" ng-hide="service.status" class="btn btn-danger">{{service.status}}</button>
							<button type="button" ng-show="service.status" class="btn btn-success">{{service.status}}</button>
						</td>
					</tr>
				</tbody>
			</table>

		</div>
	</div>
</div>
<?php
include $footer;
