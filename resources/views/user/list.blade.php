@extends("layouts/app")
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="purple">
                        <i class="material-icons">assignment</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Danh sách</h4>

                        <!-- Here you can write extra buttons/actions for the toolbar              -->
                    </div>

                    <div class="material-datatables">
                        <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="col-md-1 checkbox-radios">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsCheckboxes">
                                                </label>
                                            </div>
                                        </div>
                                    </th>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th class="disabled-sorting">Status</th>
                                    <th class="disabled-sorting">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="col-md-1 checkbox-radios">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsCheckboxes">
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>1</td>
                                    <td>Tiger Nixon</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>
                                        <div class="togglebutton">
                                            <label>
                                                <input type="checkbox" checked="">
                                            </label>
                                        </div>
                                    </td>

                                    <td class="td-actions">
                                       <button type="button" rel="tooltip" title="Detail Task" class="btn btn-warning btn-simple btn-xs" data-toggle="modal" data-target="#noticeModal">
                                        <i class="material-icons">flash_on</i>
                                    </button>

                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs" data-toggle="modal" data-target="#myModal">
                                        <i class="material-icons">edit</i>
                                    </button>


                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                        <i class="material-icons">close</i>
                                    </button>
                                </td>
                                <tr>
                                    <td>
                                        <div class="col-md-1 checkbox-radios">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="optionsCheckboxes">
                                                </label>
                                            </div>
                                        </div>
                                    </td>
                                    <td>1</td>
                                    <td>Tiger Nixon</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>
                                        <div class="togglebutton">
                                            <label>
                                                <input type="checkbox" checked="">
                                            </label>
                                        </div>
                                    </td>

                                    <td class="td-actions">
                                       <button type="button" rel="tooltip" title="Detail Task" class="btn btn-warning btn-simple btn-xs" data-toggle="modal" data-target="#noticeModal">
                                        <i class="material-icons">flash_on</i>
                                    </button>

                                    <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-simple btn-xs" data-toggle="modal" data-target="#myModal">
                                        <i class="material-icons">edit</i>
                                    </button>


                                    <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-xs">
                                        <i class="material-icons">close</i>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- end content-->
        </div>
        <!--  end card  -->
    </div>
    <!-- end col-md-12 -->
</div>

<a href="UserAdd" class="float-right">
    <button class="btn btn-primary">
        <i class="material-icons">add</i> Thêm
    </button>
</a>

<a href="#">
    <button class="btn btn-danger">
        <i class="material-icons">close</i> Xóa tất cả
    </button>
</a>
<!-- end row -->
</div>


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="material-icons">clear</i>
                </button>
                <h4 class="modal-title">Modal title</h4>
            </div>
            <div class="modal-body">
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
                    <div class="form-group">
                        <label class="label-control">Datetime Picker</label>
                        <input type="text" class="form-control datetimepicker" value="10/05/2016">
                        <span class="material-input"></span>
                    </div>
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-simple">Nice Button</button>
                <button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="noticeModal" tabindex="-1" role="dialog"aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notice">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                <h5 class="modal-title" id="myModalLabel">How Do You Become an Affiliate?</h5>
            </div>

            <div class="modal-body">
                <div class="card">
                    <form id="RegisterValidation" action="" method="" novalidate="novalidate">
                        <div class="card-header card-header-icon" data-background-color="rose">
                            <i class="material-icons">mail_outline</i>
                        </div>
                        <div class="card-content">
                            <h4 class="card-title">Details Forms</h4>
                            <div class="form-group label-floating is-empty">
                                <label class="control-label">
                                    Email Address
                                    <small>*</small>
                                </label>
                                <input class="form-control" name="email" type="email" required="true" aria-required="true">
                                <span class="material-input"></span>
                            </div>
                            <div class="form-group label-floating is-empty">
                                <label class="control-label">
                                    Password
                                    <small>*</small>
                                </label>
                                <input class="form-control" name="password" id="registerPassword" type="password" required="true" aria-required="true">
                                <span class="material-input"></span>
                            </div>
                            <div class="form-group label-floating has-error is-empty">
                                <label class="control-label">
                                    Confirm Password
                                    <small>*</small>
                                </label>
                                <input class="form-control" name="password_confirmation" id="registerPasswordConfirmation" type="password" required="true" equalto="#registerPassword" aria-required="true">
                                <span class="material-input"></span>
                            </div>
                            <div class="category form-category">
                                <small>*</small> Required fields
                            </div>

                            <div class="togglebutton">
                                <label class="form-group">
                                    <input type="checkbox" checked="">
                                </label>
                            </div>

                            <select class="selectpicker" data-style="btn btn-primary btn-round" title="Single Select" data-size="7">
                                <option disabled selected>Choose city</option>
                                <option value="2">Foobar</option>
                                <option value="3">Is great</option>
                            </select>


                            <div class="checkbox pull-left">
                                <label>
                                    <input type="checkbox" name="optionsCheckboxes" required="true" aria-required="true"><span class="check"></span></span> Subscribe to newsletter
                                </label>
                            </div>

                            <div class="form-footer text-right">
                                <button type="submit" class="btn btn-rose btn-fill">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection