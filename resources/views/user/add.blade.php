@extends("layouts/app")
@section('content')
<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="card">
				<div class="card-header card-header-icon" data-background-color="rose">
					<i class="material-icons">contacts</i>
				</div>
				<div class="card-content">
					<h4 class="card-title">Horizontal Form</h4>
					<form class="form-horizontal">

						<div class="row">
							<div class="col-md-6">
								<label class="col-sm-2 label-on-left">Xuất xứ <strong class="text-danger">*</strong></label>
								<div class="col-sm-7">
									<div class="form-group label-floating is-empty">
										<label class="control-label"></label>
										<input class="form-control" name="pro_xuatxu" value="">
										<span class="material-input"></span>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<label class="col-sm-2 label-on-left">Số lượng <strong class="text-danger">*</strong></label>
								<div class="col-sm-7">
									<div class="form-group label-floating is-empty">
										<label class="control-label"></label>
										<input class="form-control" type="text" name="pro_soluong" value="">
										<span class="material-input"></span>
									</div>
								</div>
							</div>
						</div>


						<div class="card-footer text-center">   
                            <button type="submit" name="submit" class="btn btn-primary btn-fill">Xác nhận</button>
                            <button type="reset" class="btn btn-info btn-fill">Làm lại</button>;
                            <a href=""><button type="button" class="btn btn-default btn-fill">Hủy</button></a>
                        </div>
					</form>
					<strong class="text-danger text-bold">Note: (*) - Bắt buộc phải thêm thuộc tính</strong>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection