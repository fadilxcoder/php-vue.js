<?php 
    $this->layout('layouts/lp.base.layout', [
        'title' => $this->e($title)
    ]);
?>

<?php $this->start('landingPage') ?>
<div class="row">
    <div class="col-md-12">
        <img class="img-fluid rounded mb-4" src="http://placehold.it/1200x300" alt="">
    </div>
</div>
<div class="row">
    <div class="col-md-12"> 
        <div class="invoice-box">
            <table>
                <tr class="top">
                    <td colspan="4">
                        <table>
                            <tr>
                                <td class="title">
                                    <img src="<?php echo URL . 'assets/images/inv.jpg' ?>" style="max-width:150px;">
                                </td>

                                <td>
                                    Invoice #: 123<br>
                                    Created: January 1, 2021<br>
                                    Due: February 1, 2021
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="information">
                    <td colspan="4">
                        <table>
                            <tr>
                                <td>
                                    iFXC, Inc.<br>
                                    12345 XYZ Road<br>
                                    Silicon Valley, CA 12345
                                </td>

                                <td>
                                    Acme Corp.<br>
                                    John Doe<br>
                                    john@example.com
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr class="heading">
                    <td>Item</td>
                    <td>Unit Cost</td>
                    <td>Quantity</td>
                    <td>Price</td>
                </tr>
                <!-- HERE VUE LOGICS -->
                <tr class="item" v-for="_itm in items">
                    <td>
                        <input v-model="_itm.description" />
                    </td>
                    <td>
                        $ <input type="number" v-model="_itm.price" min="0" />
                    </td>
                    <td>
                        <input type="number" v-model="_itm.quantity" min="0" />
                    </td>
                    <td>
                        $ {{ _itm.price * _itm.quantity | currency }}
                    </td>
                </tr>
                <tr>
                    <td colspan="4">
                        <button class="btn btn-secondary" @click="addRowToInvoice($event)">Add row</button>
                    </td>
                </tr>
                
                <tr class="total">
                    <td colspan="3"></td>
                    <td>Total: ${{ total | currency }}</td>
                </tr>
                <!-- EOF HERE VUE LOGICS -->
            </table>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <hr>
    </div>
</div>
<?php $this->stop() ?>