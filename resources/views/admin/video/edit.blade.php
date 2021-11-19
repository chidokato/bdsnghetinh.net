@extends('admin.layout.index')

@section('Video')
class="active"
@endsection

@section('content')

<div id="content" class="span10" style="min-height: 1000px;">
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i> <a href="admin/dashboard">Dashboard</a> <i class="icon-angle-right"></i> 
				</li>
				<li>
					<a href="admin/Video/list">Video</a> <i class="icon-angle-right"></i> 
				</li>
				<li>
					<a href="admin/Video/add">Add</a> 
				</li>
			</ul>

			@if(count($errors) > 0)
				@foreach($errors->all() as $err)
					<div class="alert alert-error">
						<button type="button" class="close" data-dismiss="alert">×</button>
						<strong>{{$err}} !</strong>
					</div>
				@endforeach
			@endif

			@if(session('Alerts'))
				<div class="alert alert-success">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<strong>
					{{session('Alerts')}} !
					</strong>
				</div>
			@endif



			<form action="admin/video/edit/{{$video['id']}}" method="POST">
			<p>
				<button type="submit" class="btn  btn-primary"><i class="icon-save"></i> Save</button>
			</p>
			<input type="hidden" name="_token" value="{{csrf_token()}}" />
			<div class="row-fluid">
				<div class="box span6">
					<div class="box-header">
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Content</h2>
					</div>
					<div class="box-content form-horizontal">
						<fieldset>
						  	<div class="control-group ">
								<label class="">Name *</label>
								<input required value="{{$video['name']}}" name='name' type="text" placeholder="Name ..." class="span12">
							</div>
							
							<div class="control-group ">
								<label class="">Video</label>
								<input  value="{{$video['video']}}" name='video' type="text" placeholder="video ..." class="span12">
							</div>
							
							<div class="control-group ">
								<label class="">Note</label>
								<input  value="{{$video['note']}}" name='note' type="text" placeholder="note ..." class="span12">
							</div>
						</fieldset>
					</div>
				</div><!--/span-->
				
			</div><!--/row-->
			
			</form>
</div>

@endsection