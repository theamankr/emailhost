<div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email Address</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="email" name="email" value="{$email|escape}">
    </div>
</div>
<div class="form-group">
    <label for="password" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
        <input type="password" class="form-control" id="password" name="password" value="{$password|escape}">
    </div>
</div>
<div class="form-group">
    <label for="quota" class="col-sm-2 control-label">Storage Quota (MB)</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="quota" name="quota" value="{$quota|escape}">
    </div>
</div>
<div class="form-group">
    <label for="autoresponderMessage" class="col-sm-2 control-label">Autoresponder Message</label>
    <div class="col-sm-10">
        <textarea class="form-control" id="autoresponderMessage" name="autoresponderMessage">{$autoresponderMessage|escape}</textarea>
    </div>
</div>
<div class="form-group">
    <label for="forwardTo" class="col-sm-2 control-label">Forward To</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="forwardTo" name="forwardTo" value="{$forwardTo|escape}">
    </div>
</div>
<button type="submit" class="btn btn-primary">Create Account</button>
