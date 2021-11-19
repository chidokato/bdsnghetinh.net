@extends('admin.layout.index')

@section('icon')
class="active"
@endsection

@section('content')

<div id="content" class="span12" style="min-height: 1000px;">
	<ul class="breadcrumb">
		<li>
			<i class="icon-home"></i> <a href="admin/dashboard">Dashboard</a> <i class="icon-angle-right"></i> 
		</li>
		<li>
			<a href="admin/icon/list">icon</a> <i class="icon-angle-right"></i> 
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
	<p><a href="admin/icon/add"><button class="btn btn-primary"><i class="icon-plus"></i> Add</button></a></p>
	<div class="row-fluid">		
		<div class="box span12">
			<div class="box-header" data-original-title>
				<h2><i class="halflings-icon white user"></i><span class="break"></span>icon</h2>
			</div>
			<div class="box-content">
				<table class="table">
				  	<tbody>
				  		<tr>
							<th>Icon</th>
							<th>Name</th>
						    <th>Actions</th>
					  	</tr>
					  	@foreach($icon as $val)
					  	<tr>
					  		<td></td>
					  		<td></td>
					  		<td></td>
					  	</tr>
					  	@endforeach
				  	</tbody>
			  </table>            
			</div>
		</div><!--/span-->
	</div><!--/row-->


	

</div>

@endsection
