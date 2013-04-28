<div class="container">
    <div class="flash">
    </div>
    <div class="row">
        <div class="span3">
            <ul class="well nav nav-list" style="margin-bottom: 18px;">
                
                <li class="active">
                    <a href="/transactions"><i class="icon-list-alt "></i> List users</a>
                </li>
                
                <li class="">
                    <a href="/buys"><i class="icon-random dark"></i> Add user</a>
                </li>
                
            </ul>
            
        </div>
        <div class="span9">
            <table class="transactions-header">
                <tbody><tr>
                    <td>
                        <div class="pull-right">
                            <a href="/admin/user/add" class="btn">Add new</a>
                        </div>
                    </td>
                </tr>
            </tbody></table>
            <table class="table table-striped" id="transactions_list">
                <thead>
                    <tr>
                        <th>Transaction</th>
                        <th>Date</th>
                        <th>Status</th>
                        <th class="amount">Amount</th>
                    </tr>
                </thead>
                <tbody>
                    <tr id="transaction_515c72c6d3d75a0ceb000021">
                        <td>
                            You sent bitcoins to 14TXbJdobKqcSJSWRKxU9ipHko8UZkMp2F
                            
                        </td>
                        <td>Apr  3, 2013</td>
                        <td><span class="label label-success">Complete</span></td>
                        <td class="amount">-0.10</td>
                    </tr>
                    <tr id="transaction_515b8e6893c7296d2c00019a">
                        <td>
                            You purchased bitcoins
                            <i class="icon-comment"></i>
                        </td>
                        <td>Apr  2, 2013</td>
                        <td><span class="label label-success">Complete</span></td>
                        <td class="amount">+0.10370561</td>
                    </tr>
                </tbody>
            </table>
            
        </div>
    </div>
    <div class="modal fade hide" id="send_money">
        <div class="modal-header">
            <a class="close" data-dismiss="modal">×</a>
            <h4>Send Money</h4>
        </div>
        <div class="modal-body">
            <form accept-charset="UTF-8" action="/transactions/send_money" class="form-horizontal" data-remote="true" id="new_transaction" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value="uV4fu7GScKSe4lJ0I80qC/+J39N3gFBD1Ven/PbjZgg="></div>
            
            
            <div class="control-group">
                <label class="control-label" for="transaction_to">To:</label>
                <div class="controls">
                    <input class="span3" data-items="4" data-provide="typeahead" id="transaction_to" name="transaction[to]" placeholder="email or bitcoin address" size="30" type="email">
                </div>
                <div class="controls">
                    <p class="help-block">enter an email or bitcoin address</p>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="transaction_amount">Amount:</label>
                <div class="controls">
                    <div class="input-prepend">
                        <span class="add-on">BTC</span><input class="span1" data-convert-from="BTC" data-convert-target="send_money_amount_converted" data-convert-to="USD" id="send_money_amount" name="transaction[amount]" placeholder="0.00" size="30" type="text">
                    </div>
                    or
                    <div class="input-prepend">
                        <span class="add-on">USD</span><input class="span1" data-convert-from="USD" data-convert-target="send_money_amount" data-convert-to="BTC" id="send_money_amount_converted" name="transaction_amount_converted" placeholder="0.00" type="text">
                    </div>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="transaction_notes">Notes:</label>
                <div class="controls">
                    <textarea class="span3" cols="40" id="transaction_notes" name="transaction[notes]" rows="4"></textarea>
                </div>
            </div>
        </form></div>
        <div class="modal-footer">
            <img class="spinner" id="send_money_spinner" src="/assets/spinner-cf0a46bed1b27108ad85fd1602771f12.gif">
            <a href="#" class="btn btn-primary" data-disable-with="Send Money" id="send_money_submit">Send Money</a>
            <a href="#" class="btn secondary" data-dismiss="modal">Cancel</a>
        </div>
    </div>
    <div class="modal fade hide" id="request_money">
        <div class="modal-header">
            <a class="close" data-dismiss="modal">×</a>
            <h4>Request Money</h4>
        </div>
        <div class="modal-body">
            <form accept-charset="UTF-8" action="/transactions/request_money" class="form-horizontal" data-remote="true" id="new_transaction" method="post"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="✓"><input name="authenticity_token" type="hidden" value="uV4fu7GScKSe4lJ0I80qC/+J39N3gFBD1Ven/PbjZgg="></div>
            
            <div class="control-group">
                <label class="control-label" for="transaction_from">From:</label>
                <div class="controls">
                    <input class="span3" id="transaction_from" name="transaction[from]" placeholder="email address" size="30" type="email">
                </div>
                <div class="controls">
                    <p class="help-block">enter an email (leave blank to generate a QR)</p>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="transaction_amount">Amount:</label>
                <div class="controls">
                    <div class="input-prepend">
                        <span class="add-on">BTC</span><input class="span1" data-convert-from="BTC" data-convert-target="request_money_amount_converted" data-convert-to="USD" id="request_money_amount" name="transaction[amount]" placeholder="0.00" size="30" type="text">
                    </div>
                    or
                    <div class="input-prepend">
                        <span class="add-on">USD</span><input class="span1" data-convert-from="USD" data-convert-target="request_money_amount" data-convert-to="BTC" id="request_money_amount_converted" name="transaction_amount_converted" placeholder="0.00" type="text">
                    </div>
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="transaction_notes">Notes:</label>
                <div class="controls">
                    <textarea class="span3" cols="40" id="transaction_notes" name="transaction[notes]" rows="4"></textarea>
                </div>
            </div>
        </form></div>
        <div class="modal-footer">
            <img class="spinner" id="request_money_spinner" src="/assets/spinner-cf0a46bed1b27108ad85fd1602771f12.gif">
            <a href="#" class="btn btn-primary" data-disable-with="Request Money" id="request_money_submit">Request Money</a>
            <a href="#" class="btn secondary" data-dismiss="modal">Cancel</a>
        </div>
    </div>
    
</div>