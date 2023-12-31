<!DOCTYPE html>

<html>

<head>

	<title>Log Activity Lists</title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />

</head>

<body>


<div class="container">

	<h1>Log Activity Lists</h1>

	<table class="table table-bordered">

		<tr>

			<th>No</th>

			<th>Subject</th>

			<th>URL</th>

			<th>Method</th>

			<th>Ip</th>

			<th width="300px">User Agent</th>

			<th>User Id</th>
			<th>Tanggal dan jam</th>

			<th>Action</th>

		</tr>

		@if($logs->count())

			@foreach($logs as $key => $log)

			<tr>

				<td>{{ ++$key }}</td>

				<td>{{ $log->subject }}</td>

				<td class="text-success">{{ $log->url }}</td>

				<td><label class="label label-info">{{ $log->method }}</label></td>

				<td class="text-warning">{{ $log->ip }}</td>

				<td class="text-danger">{{ $log->agent }}</td>

				<td>{{ $log->user_id }}</td>
				<td>{{ \Carbon\Carbon::parse($log->created_at)->locale('id_ID')->isoFormat('D MMMM YYYY, HH:mm:ss') }}</td>

				<td><a href="{{route('delete', ['id' => $log->id])}}" class="btn btn-danger btn-sm">Delete</a></td>

			</tr>

			@endforeach

		@endif

	</table>

</div>


</body>

</html>
