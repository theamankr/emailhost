<h2>Email Management</h2>
<p>Use this interface to manage your email accounts, including setting up autoresponders and email forwarding.</p>

<form method="post" action="index.php?m=emailhostaddon&action=setupAutoresponder">
    <h3>Set Up Autoresponder</h3>
    <div class="form-group">
        <label for="email">Email Address</label>
        <input type="text" class="form-control" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="autoresponderMessage">Autoresponder Message</label>
        <textarea class="form-control" id="autoresponderMessage" name="autoresponderMessage" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Set Up Autoresponder</button>
</form>

<form method="post" action="index.php?m=emailhostaddon&action=setupForwarding">
    <h3>Set Up Email Forwarding</h3>
    <div class="form-group">
        <label for="email">Email Address</label>
        <input type="text" class="form-control" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="forwardTo">Forward To</label>
        <input type="text" class="form-control" id="forwardTo" name="forwardTo" required>
    </div>
    <button type="submit" class="btn btn-primary">Set Up Forwarding</button>
</form>
