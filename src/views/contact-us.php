<?php 
    $this->layout('layouts/lp.base.layout', [
        'title' => $this->e($title)
    ]);
?>

<?php $this->start('landingPage') ?>
<div class="row">
    <div class="col-lg-12 col-sm-12">
        <div class="card mb-4" v-for="_cts in contacts">
            <div class="card-body">
                <h2 class="card-title">{{ _cts.name }}</h2>
                <p class="card-text">{{ _cts.message }}</p>
            </div>
            <div class="card-footer text-muted">
                {{_cts.phone }} / {{_cts.email }}
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 mb-4">
        <h3>Send us a Message</h3>
        <div id="success" v-if="isSuccess">
            <div class="alert alert-success" role="alert"> Your reference code is #<span id="success-id"></span></div>
        </div>
        <form name="sentMessage" id="contactForm"  @submit="contactForm">
            <div class="control-group form-group">
                <div class="controls">
                    <label>Full Name:</label>
                    <input type="text" class="form-control" id="name" name="name" v-model="contact.name" required>
                    <p class="help-block"></p>
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <label>Phone Number:</label>
                    <input type="tel" class="form-control" id="phone" name="phone" v-model="contact.phone" required>
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <label>Email Address:</label>
                    <input type="email" class="form-control" id="email" name="email" v-model="contact.email" required>
                </div>
            </div>
            <div class="control-group form-group">
                <div class="controls">
                    <label>Message:</label>
                    <textarea rows="10" cols="100" class="form-control" id="message" name="message" v-model="contact.message" maxlength="999" style="resize:none" required></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary" id="sendMessageButton" v-show="contact.name && contact.phone && contact.email && contact.message">Send Message</button>
        </form>
    </div>
</div>
<?php $this->stop() ?>