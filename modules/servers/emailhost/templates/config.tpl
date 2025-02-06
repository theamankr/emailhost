<div class="form-group">
    <label for="apiEndpoint" class="col-sm-2 control-label">API Endpoint</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="apiEndpoint" name="apiEndpoint" value="{$apiEndpoint|escape}">
    </div>
</div>
<div class="form-group">
    <label for="apiKey" class="col-sm-2 control-label">API Key</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="apiKey" name="apiKey" value="{$apiKey|escape}">
    </div>
</div>
<div class="form-group">
    <label for="cpanelUsername" class="col-sm-2 control-label">cPanel Username</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="cpanelUsername" name="cpanelUsername" value="{$cpanelUsername|escape}">
    </div>
</div>
<div class="form-group">
    <label for="cpanelPassword" class="col-sm-2 control-label">cPanel Password</label>
    <div class="col-sm-10">
        <input type="password" class="form-control" id="cpanelPassword" name="cpanelPassword" value="{$cpanelPassword|escape}">
    </div>
</div>
<div class="form-group">
    <label for="storageQuota" class="col-sm-2 control-label">Storage Quota (MB)</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="storageQuota" name="storageQuota" value="{$storageQuota|escape}">
    </div>
</div>
<div class="form-group">
    <label for="maxEmailAccounts" class="col-sm-2 control-label">Max Email Accounts</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" id="maxEmailAccounts" name="maxEmailAccounts" value="{$maxEmailAccounts|escape}">
    </div>
</div>
<div class="form-group">
    <label for="allowAutoresponders" class="col-sm-2 control-label">Allow Autoresponders</label>
    <div class="col-sm-10">
        <input type="checkbox" id="allowAutoresponders" name="allowAutoresponders" {$allowAutoresponders|escape}>
    </div>
</div>
<div class="form-group">
    <label for="allowForwarding" class="col-sm-2 control-label">Allow Email Forwarding</label>
    <div class="col-sm-10">
        <input type="checkbox" id="allowForwarding" name="allowForwarding" {$allowForwarding|escape}>
    </div>
</div>
