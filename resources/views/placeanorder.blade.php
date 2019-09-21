@extends('layouts.app')
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<title>PLACE AN ORDER</title>
	@section('styles')
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="public/css/placeanorder.css">
	@endsection

	@section('scripts')
	<script src="//code.jquery.com/jquery-1.12.4.js"></script>
	<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

	<script type="text/javascript" src="public/js/placeanorder.js"></script>
	@endsection
</head>
<body>
@section('content')
<div class="mainDiv">
	<div class="searchDiv">
		<input type="text" id="searchText" placeholder="Enter Your Search" autofocus="" class="searchBar">
		<input type="button" id="searchButton" class="actionButton searchButton" value="Search">
		<img src="public/img/logos/Tire1.jpeg" id="tireAnimImg" class="imgFrame">
	</div>

	<div class="tableDiv">
		<div class="addToOrderButtonDiv">
			<input type="button" id="addToOrderButton" class="addToOrderButton actionButton" value="Add Selected To Order">
		</div>
		<table id="itemsTable" class="itemsTable fixed_header">
			<thead class="orderHeader">
				<tr>
					<th class="firstCol borderBottom textCentered">Inventory Item</th>
					<th class="secondCol borderBottom textCentered">In Stock</th>
					<th class="thirdCol borderBottom textCentered">Qty</th>
					<th class="fourthCol borderBottom textCentered" style="padding-right: 0px !important;">Price</th>
					<th class="fifthCol borderBottom textCentered" style="padding-right: 0px !important;">SubTotal</th>
					<th class="sixCol borderBottom textCentered addSelected"></th>
				</tr>
			</thead>
			<tbody>
				<!-- THE ROWS ARE ADDED FROM JAVASCRIPT -->
			</tbody>
		</table>
		<div id="noItemsFoundDiv" class="noItemFound">NO ITEMS MATCHED YOUR SEARCH</div>
	</div>
	<div class="orderTotalDiv">
		<table id="totalTable" class="fixed_header orderTable">
			<thead>
				<tr>
					<th class="firstCol textCentered"></th>
					<th class="secondCol textCentered"></th>
					<th class="thirdCol textCentered"></th>
					<th class="fourthCol alignRight" style="padding-right: 0px !important;">Total</th>
					<th id="orderTotal" class="fifthCol alignRight orderTotalHeader">0.00</th>
					<th class="sixCol textCentered addSelected"></th>
				</tr>
			</thead>
		</table>
	</div>
</div>

@endsection
</body>
</html>