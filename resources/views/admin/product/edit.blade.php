@extends('admin.layout.index')
@section('product')
class="active"
@endsection
@section('content')

<div id="content" class="span12" style="min-height: 1000px;">
	<ul class="breadcrumb">
		<li>
			<i class="icon-home"></i> <a href="admin/dashboard">Dashboard</a> <i class="icon-angle-right"></i> 
		</li>
		<li>
			<a href="admin/product/list">Product</a> <i class="icon-angle-right"></i> 
		</li>
		<li>
			<a>Edit</a>
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
	<form action="admin/product/edit/{{$data->id}}" method="POST" enctype="multipart/form-data">
	<p>
		<button type="submit" class="btn btn-primary"><i class="icon-save"></i> Save</button>
	</p>
	<input type="hidden" name="_token" value="{{csrf_token()}}" />
	<div class="row-fluid">
		<div class="box span6">
			<div class="box-header">
				<h2><i class="halflings-icon white edit"></i><span class="break"></span>Tổng quan</h2>
				<div class="box-icon">
					<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
					<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
				</div>
			</div>
			<div class="box-content form-horizontal">
				<fieldset>
					<div class="control-group">
						<label>Tên dự án</label>
						<div>
							<div>
							  <input value="{!! old('name', isset($data['name']) ? $data['name']:null) !!}" name='name' type="text" placeholder="Name ..." class="span12">
							</div>
						</div>
					</div>

					<div class="control-group">
						<label for="selectError">Danh mục</label>
						<div>
						  	<select name="cat_id" >
						  		<?php addeditcatecogy ($datacategory,0, $str='',$data['cat_id']) ?>
						  	</select>
						</div>
				  	</div>

					<div class="control-group">
						<label>Địa chỉ</label>
						<div>
							<div>
							  <input name='address' value="{!! old('address', isset($data['address']) ? $data['address']:null) !!}" type="text" placeholder="address ..." class="span12">
							</div>
						</div>
					</div>
						
					<div class="control-group">
						<label>Vị trí</label>
						<div>
						  	<select class="span6" id="city" >
						  		@foreach($city as $val)
								<option
								@if($data->district->city->id == $val->id)
								{{"selected"}}
								@endif
								value="{{$val->id}}">{{$val->name}}</option>
								@endforeach
						  	</select>
						  	<?php
							  	$city_id = $data->district->city->id;
							  	$select_district = $data->district->where('city_id',$city_id)->get()->toArray();
							  	//print_r($select_district);
						  	?>
						  	<select name='dis_id' class="span6" id="district" >
						  	@foreach($select_district as $val)
								<option
								<?php
								if ($val['id'] == $data['dis_id']) {
									echo "selected";
								}
								?>
								value="{!! $val['id'] !!}">{!! $val['name'] !!}</option>
							@endforeach
						  	</select>
						</div>
				 	</div>
				</fieldset>
			</div>
		</div><!--/span-->
		<div class="box span6">
			<div class="box-header">
				<h2><i class="halflings-icon white edit"></i><span class="break"></span>Tổng quan</h2>
				<div class="box-icon">
					<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
					<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
				</div>
			</div>
			<div class="box-content form-horizontal">
				<fieldset>
					<div class="span6">
						<div class="control-group">
							<label>Giá</label>
							<div>
								<div>
								  <input value="{!! old('price', isset($data['price']) ? $data['price']:null) !!}" name='price' type="text" placeholder="price ..." class="span12">
								</div>
							</div>
						</div>
					</div>
					<div class="span6">
						<div class="control-group">
							<label>Hotline</label>
							<div>
								<div>
								  <input value="{!! old('hotline', isset($data['hotline']) ? $data['hotline']:null) !!}" name='hotline' type="text" placeholder="hotline ..." class="span12">
								</div>
							</div>
						</div>	
					</div>
					<div class="control-group">
						<label>Chủ đầu tư</label>
						<div>
							<div>
							  <input value="{!! old('investor', isset($data['investor']) ? $data['investor']:null) !!}" name='investor' type="text" placeholder="investor ..." class="span12">
							</div>
						</div>
					</div>
					<div>
						<div class="control-group span6">
							<label>Ngày bàn giao</label>
							<div>
								<div>
								  <input value="{!! old('complete', isset($data['complete']) ? $data['complete']:null) !!}" name='complete' type="text" placeholder="complete ..." class="span12">
								</div>
							</div>
						</div>
						<div class="control-group span6">
							<label >Diện tích</label>
							<div>
								<div>
								  <input value="{!! old('acreage', isset($data['acreage']) ? $data['acreage']:null) !!}" name='acreage' type="text" placeholder="acreage ..." class="span12 ">
								</div>
							</div>
						</div>
					</div>
					<div class="control-group">
						<label>Ưu đãi</label>
						<div>
							<div>
							  <input value="{!! old('content6', isset($data['content6']) ? $data['content6']:null) !!}" name='content6' type="text" placeholder="Ưu đãi ..." class="span12">
							</div>
						</div>
					</div>	
				</fieldset>
			</div>
		</div><!--/span-->
	</div><!--/row-->

	<div class="row-fluid">
		<div class="box span6">
			<div class="box-header">
				<h2><i class="halflings-icon white edit"></i><span class="break"></span>Content</h2>
				<div class="box-icon">
					<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
					<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
				</div>
			</div>
			<div class="box-content form-horizontal">
				<fieldset>
				  	<div class="control-group">
						<img style="max-height: 70px;" src="{{$data->img}}">
					</div>
					<div class="control-group">
						<label>Ảnh</label>
						<input style="margin-bottom: 0px;" type="text" name="img" id="image" class="span10"><button onclick="BrowseServer();" class="btn" type="button">Go!</button>
					</div>

					<div class="control-group">
						<label>Status</label>
					  	<label class="radio">
							<input <?php if($data['status']==1){echo'checked';} ?> type="radio" name="status"  value="1" >Public
					  	</label>
					  	<label class="radio" style="padding-top: 5px;">
							<input <?php if($data['status']==0){echo'checked';} ?> type="radio" name="status"  value="0">Hidden
					  	</label>
					</div>
					<div class="control-group">
						<label>Hot</label>
						<div>
						  	<label class="radio" style="padding-top: 5px;">
								<input <?php if($data['hot']==0){echo'checked';} ?> type="radio" name="hot"  value="0">No
						  	</label>
						  	<label class="radio">
								<input <?php if($data['hot']==1){echo'checked';} ?> type="radio" name="hot"  value="1">Yes
						  	</label>
						</div>
					</div>
				</fieldset>
			</div>
		</div><!--/span-->
		<div class="box span6">
			<div class="box-header">
				<h2><i class="halflings-icon white edit"></i><span class="break"></span>SEO</h2>
				<div class="box-icon">
					<a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
					<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
					<a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
				</div>
			</div>
			<div class="box-content form-horizontal">
				<fieldset>
					<div class="control-group">
						<label>Title</label>
						<div>
							<div>
							  <input value="{!! old('title', isset($data['title']) ? $data['title']:null) !!}" name='title' type="text" placeholder="Title ..." class="span12">
							</div>
						</div>
					</div>
					<div class="control-group">
						<label>Description ( <small>Còn lại <input readonly type="text" name="left" size=3 maxlength=3 value="{!! $data['desc_size'] !!}" style='color: red; width: 23px; background: none; border: none; padding: 0px; margin-bottom: 1px;' > ký tự</small> )</label>
						<div>
							<div>
								<input value="{!! old('description'), isset($data['description'])?$data['description']:null !!}" name="description" placeholder="Description ..." type="text" id="fname" onKeyDown="CountLeft(this.form.fname, this.form.left,150);" onKeyUp="CountLeft(this.form.fname,this.form.left,150);" class="span12 typeahead">
						 	            
							</div>
						</div>
					</div>
					<div class="control-group">
						<label>keywords</label>
						<div>
							<div>
							  <input value="{!! old('keywords', isset($data['keywords']) ? $data['keywords']:null) !!}" name='keywords' type="text" placeholder="keywords ..." class="span12">
							</div>
						</div>
					</div>

					<div class="control-group">
						<label for="selectError3">Robot</label>
						<div>
						  	<select name='robot' id="selectError3">
								<option <?php if($data['robot']==0){echo'selected';} ?> value="0">index, follow</option>
								<option <?php if($data['robot']==1){echo'selected';} ?> value="1">noindex, nofollow</option>
						  	</select>
						</div>
				 	</div>
				</fieldset>
			</div>
		</div><!--/span-->
	</div><!--/row-->
	
	<div class="row-fluid">
		<div class="box span12">
			<div class="box-header">
				<h2><i class="halflings-icon white th"></i><span class="break"></span>Tabs</h2>
			</div>
			<div class="box-content">
				<ul class="nav tab-menu nav-tabs" id="myTab">
					<li class="active"><a href="#0">Content</a></li>
					<!-- <li><a href="#1">Content1</a></li>
					<li><a href="#2">Content2</a></li>
					<li><a href="#3">Content3</a></li>
					<li><a href="#4">Content4</a></li>
					<li><a href="#5">Content5</a></li> -->
					<!-- <li><a href="#6">Box vàng</a></li> -->
				</ul>
				<div id="myTabContent" class="tab-content">
					<div class="tab-pane active" id="0">
						<!-- <input value="{!! old('heading', isset($data['heading']) ? $data['heading']:null) !!}" name='heading' type="text" placeholder="Name ..." class="span12"> -->
						<textarea class="span12 ckeditor" name="content">
							{!! old('content', isset($data['content']) ? $data['content']:null) !!}
						</textarea>
					</div>
					<!-- <div class="tab-pane" id="1">
						<input value="{!! old('heading1', isset($data['heading1']) ? $data['heading1']:null) !!}" name='heading1' type="text" placeholder="Name ..." class="span12">
						<textarea class="span12 ckeditor" name="content1">
							{!! old('content1', isset($data['content1']) ? $data['content1']:null) !!}
						</textarea>
					</div>
					<div class="tab-pane" id="2">
						<input value="{!! old('heading2', isset($data['heading2']) ? $data['heading2']:null) !!}" name='heading2' type="text" placeholder="Name ..." class="span12">
						<textarea class="span12 ckeditor" name="content2">
							{!! old('content2', isset($data['content2']) ? $data['content2']:null) !!}
						</textarea>
					</div>
					<div class="tab-pane" id="3">
						<input value="{!! old('heading3', isset($data['heading3']) ? $data['heading3']:null) !!}" name='heading3' type="text" placeholder="Name ..." class="span12">
						<textarea class="span12 ckeditor" name="content3">
							{!! old('content3', isset($data['content3']) ? $data['content3']:null) !!}
						</textarea>
					</div>
					<div class="tab-pane" id="4">
						<input value="{!! old('heading4', isset($data['heading4']) ? $data['heading4']:null) !!}" name='heading4' type="text" placeholder="Name ..." class="span12">
						<textarea class="span12 ckeditor" name="content4">
							{!! old('content4', isset($data['content4']) ? $data['content4']:null) !!}
						</textarea>
					</div>
					<div class="tab-pane" id="5">
						<input value="{!! old('heading5', isset($data['heading5']) ? $data['heading5']:null) !!}" name='heading5' type="text" placeholder="Name ..." class="span12">
						<textarea class="span12 ckeditor" name="content5">
							{!! old('content5', isset($data['content5']) ? $data['content5']:null) !!}
						</textarea>
					</div> -->
					<!-- <div class="tab-pane" id="6">
						<input value="{!! old('heading6', isset($data['heading6']) ? $data['heading6']:null) !!}" name='heading6' type="text" placeholder="Name ..." class="span12">
						<textarea class="span12 ckeditor" name="content6">
							{!! old('content6', isset($data['content6']) ? $data['content6']:null) !!}
						</textarea>
					</div>  -->
				</div>
			</div>
		</div>
	</div>
	<p>
		<button type="submit" class="btn btn-primary"><i class="icon-save"></i> Save</button>
	</p>
	</form>
</div>
@endsection

@section('script')
	<SCRIPT LANGUAGE="JavaScript">
		function CountLeft(field, count, max) {
		if (field.value.length > max)
		field.value = field.value.substring(0, max);
		else
		count.value = max - field.value.length;
		}
	</script>

	<script type="text/javascript">
		$(document).ready(function(){
			//alert('ok');
			$("#city").change(function(){
				var city_id = $(this).val();
				//alert(mid)
				$.get("admin/ajax/location/"+city_id,function(data){
					$("#district").html(data);
				});
			});

		});
	</script>
@endsection

@section('function')
	<?php 
		function addeditcatecogy ($data, $parent=0, $str='',$select=0)
{
	foreach ($data as $value) {
		if ($value['parent'] == $parent) {
			if($select != 0 && $value['id'] == $select )
			{ ?>
				<option value="<?php echo $value['id']; ?>" selected> <?php echo $str.$value['name']; ?> </option>
			<?php } else { ?>
				<option value="<?php echo $value['id']; ?>" > <?php echo $str.$value['name']; ?> </option>
			<?php }
			
			addeditcatecogy ($data, $value['id'], $str.'---',$select);
		}
	}
}
	?>
@endsection