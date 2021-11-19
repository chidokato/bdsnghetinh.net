@extends('admin.layout.index')

@section('Video')
class="active"
@endsection

@section('content')

<div id="content" class="span12" style="min-height: 1000px;">
	<ul class="breadcrumb">
		<li>
			<i class="icon-home"></i> <a href="admin/dashboard">Dashboard</a> <i class="icon-angle-right"></i> 
		</li>
		<li>
			<a href="admin/Video/list">Video</a> <i class="icon-angle-right"></i> 
		</li>
		
	</ul>
	@if(session('Alerts'))
		<div class="alert alert-success">
			<button type="button" class="close" data-dismiss="alert">×</button>
			<strong>
			{{session('Alerts')}} !
			</strong>
		</div>
	@endif
	<p><a href="admin/video/add"><button class="btn btn-primary"><i class="icon-plus"></i> Add</button></a></p>
	<div class="row-fluid">		
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon white user"></i><span class="break"></span>Video product</h2>
				
			</div>
			<div class="box-content">
				<table class="table table-striped table-bordered bootstrap-datatable datatable">
				  	<thead>
					  	<tr>
						  	<th style='DISPLAY: NONE;'></th>
						  	<th>ID</th>
							<th>Name</th>
							<th>Video</th>
							<th>Note</th>
						    <th>Actions</th>
					  	</tr>
				  	</thead>   
				  	<tbody>
						@foreach($video as $val)
						<tr>
						  	<td style='DISPLAY: NONE;'></td>
						  	<td>{{$val->id}}</td>
						  	<td>{{$val->name}}</td>
						  	<td>{{$val->video}}</td>
						  	<td>{{$val->note}}</td>
						  	<td class="center">
								<a class="btn btn-info" href="admin/video/edit/{{$val->id}}">
									<i class="halflings-icon white edit"></i>  
								</a>
								<a class="btn btn-danger" href="admin/video/delete/{{$val->id}}">
									<i class="halflings-icon white trash"></i> 
								</a>
							</td>
					  	</tr>
						@endforeach
				  	</tbody>
			  </table>            
			</div>
		</div><!--/span-->
	</div><!--/row-->

</div>

@endsection