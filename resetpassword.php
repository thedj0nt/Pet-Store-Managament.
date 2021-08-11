<html>
    <head>
        <title>reset password</title>
    </head>
<body>
    
<form role="form" method="post">
    <div class="box box-primary">
        <div class="box-header">
            <h2 class="page-header"><i class="fa fa-lock"></i> Change Password</h2>
            <div class="pull-right">
                <button type="button" name="Submit" value="Save" class="btn btn-danger"><i class="livicon" data-n="pen" data-s="16" data-c="#fff" data-hc="0" ></i> Save</button>
                <button type="reset" name="Reset" value="Clear" class="btn btn-primary"><i class="livicon" data-n="trash" data-s="16" data-c="#fff" data-hc="0"></i> Clear</button>
            </div>
        </div>
        <!-- /.box-header -->

        <div class="box-body">
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <label>Old Password</label>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-lock"></i>
                        </div>
                        <input class="form-control" id="oldPassword" name="oldPassword" value="" placeholder="Enter the Old Password" type="password">
                    </div>
                </div>
                <!-- /.input group -->
            </div>
            <br/>
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <label>New Password</label>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-lock"></i>
                        </div>
                        <input class="form-control" id="newPassword" name="newPassword" value="" placeholder="Enter the New Password" type="password">
                    </div>
                </div>
                <!-- /.input group -->
            </div>
            <br/>
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <label>Confirm Password</label>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3">
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-lock"></i>
                        </div>
                        <input class="form-control" id="confirmPassword" name="confirmPassword" value="" placeholder="Re-enter the New Password" type="password">
                    </div>
                </div>
                <!-- /.input group -->
            </div>

    </form>
</body>
</html>